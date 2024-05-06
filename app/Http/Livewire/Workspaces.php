<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

use DB; 
use Mail;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use App\Mail\ForgetPassword;

use Livewire\Component;

use Carbon\Carbon;
use Session;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

use App\Models\Customers;
use App\Models\WorkspaceUnits;
use App\Models\Facilities;
use App\Models\TempSubscriptions;
use App\Models\Subscriptions;
use App\Models\Meetingroom;
use App\Models\Payments;
use App\Models\Bookings;
use App\Models\BussinessCenterClients;

class Workspaces extends Component
{
    public $workspace_details = [], $facilitiesGlobalList = [];
    public $selected_date;
    public $selected_time;
    public $workspace_id;
    protected $listeners = ["selectDate" => 'getSelectedDate','selectTime'=>'getSelectedTime'];
    public $showpayasgosummary=false,$showsubscribesummary=false,$showParkingQty=false;
    public $item_selected_price, $vat, $subtotal, $grand_total_price;
    public $package_subscription, $selected_package, $item_selected_id, $selected_package_name, $selected_package_price, $selected_package_vat, $package_total_price;
    public $singleParking=false,$parkingcharge, $parking=false, $parking_no=0, $totalParkingcharge;
    public $meetingDate, $available_to_book=false;
    public $meeting_parking=false,$showMeetingParkingQty=false, $meeting_parking_no,$singleMeetingParking, $meetingroomPrice = 100,$meetinRoomAvailability=false, $meetinRoomAvailabilityText,$showAvailableSlots=false,$meetingDurationTime=60, $availableBookings=[],$selected_end_time;


    public $successEmailResp=false,$bc_c_name, $bc_c_email, $bc_c_phone, $bc_c_message,$admin_email="support@we-work.ae";

    //Signin SignUp
    public $showusername=false, $showAuthPannel=true, $showuserpassword=true, $showusermobile=false, $showuseremail=true, $showPaymentPannel=false, $showForGotPasswordLink=true, $showSignUpLink=true, $showSignInLink=false, $showRememberCheck=true, $showSignInButton=true, $showSignUpButton=false, $showForGotPasswordButton=false;
    public $heading = 'Sign In';
    public $name, $mobile, $email, $password, $remember_me;

    public $show_discount=false, $discount_amount=0, $discount_type, $discount_desc;

    public $forgotpassmessageShow=false, $forgotpassmessage, $forgotpassmessageStatus;

    function mount( Request $request) {
        $workspace_id = $request->workspace_id;
        $this->workspace_id = $workspace_id;
        $filter = $request->filter;
        if($workspace_id)
        {
            $this->workSpaceDetails($workspace_id);

        }
    }



    public function render()
    {
        if($this->workspace_id==7)
        {
            if(auth()->user()){

                $this->parkingcharge = config('global.parking_package_price')['permonth_charge'];
                $this->totalParkingcharge = $this->parkingcharge*$this->parking_no;

                $this->total_price = round(($this->item_selected_price+$this->totalParkingcharge),2);
                $this->vat = round($this->total_price* (config('global.TAX_PERCENT') / 100),2);
                $this->grand_total_price = round(($this->total_price+$this->vat),2);

                $existingCustomer = BussinessCenterClients::where(['contact_email'=>Session::get('customer')->email])->first();
                if($existingCustomer){
                    $this->show_discount=true;
                    $this->discount_type=1;
                    $this->discount_desc="existing client booking discount";

                    $previousBookingInfo = Subscriptions::with(['customerDetails'])->where(function ($query) {
                        $query->whereRelation('customerDetails', 'email', '=', Session::get('customer')->email);
                        }
                    )->where(['meeting_date'=>$this->selected_date,'package_category'=>2])->get();
                    if(count($previousBookingInfo)==0){
                        $this->show_discount=true;
                        $this->discount_amount=100;

                        
                        if($this->meetingDurationTime<="60"){
                            $this->subtotal = $this->item_selected_price+$this->totalParkingcharge-$this->discount_amount;

                            $this->vat = round(($this->item_selected_price+$this->totalParkingcharge-$this->discount_amount)* (config('global.TAX_PERCENT') / 100),2);
                            
                            $this->grand_total_price = round(($this->item_selected_price+$this->totalParkingcharge-$this->discount_amount+$this->vat),2);
                        }
                        else
                        {
                            
                            $extraDiscountCount = $this->meetingDurationTime/60;
                            $extraDiscount = ($this->item_selected_price-$this->discount_amount)/2;
                            $this->discount_amount=$this->discount_amount+$extraDiscount;
                            $this->subtotal = $this->item_selected_price+$this->totalParkingcharge-$this->discount_amount;
                            $this->vat = round(($this->item_selected_price+$this->totalParkingcharge-$this->discount_amount)* (config('global.TAX_PERCENT') / 100),2);

                            $this->grand_total_price = round(((($this->item_selected_price+$this->totalParkingcharge-$this->discount_amount))+$this->vat),2);
                        }
                        $this->discount_type=1;
                        $this->discount_desc="existing client booking discount";
                    }
                    else if(count($previousBookingInfo)>0){

                        $extraDiscountCount = $this->meetingDurationTime/60;
                        $extraDiscount = ($this->item_selected_price-$this->discount_amount)/2;
                        $this->discount_amount=$this->discount_amount+$extraDiscount;
                        
                        $this->subtotal = $this->item_selected_price+$this->totalParkingcharge-$this->discount_amount;
                        
                        $this->vat = round(($this->item_selected_price+$this->totalParkingcharge-$this->discount_amount)* (config('global.TAX_PERCENT') / 100),2);

                        $this->grand_total_price = round(((($this->item_selected_price+$this->totalParkingcharge-$this->discount_amount))+$this->vat),2);
                    }

                }
                else
                {
                    $this->total_price = round(($this->item_selected_price+$this->totalParkingcharge),2);
                    $this->vat = round(($this->item_selected_price+$this->totalParkingcharge)* (config('global.TAX_PERCENT') / 100),2);
                    $this->grand_total_price = round(($this->item_selected_price+$this->totalParkingcharge+$this->vat),2);
                }




                //parking
                //dd($this->grand_total_price);
                
                $this->facilitiesGlobalList = Facilities::all();
                $this->checkAvailability();
                //$this->dispatchBrowserEvent('datePicker');
                return view('livewire.workspace_details');
            }
            /*else
            {
                $this->heading = 'Sign In';
                $this->showusername=false;
                $this->showusermobile=false;
                $this->showuserpassword=true;
                $this->showuseremail=true;
                $this->showForGotPasswordLink=true;
                $this->showSignUpLink=true;
                $this->showSignInLink=false;
                $this->showRememberCheck=true;
                $this->showSignInButton=true;
                $this->showSignUpButton=false;
                $this->showForGotPasswordButton=false;
                //return view('livewire.customer-auth');
            }*/
            return view('livewire.workspace_details');
        }
        else{
            //parking
            $this->parkingcharge = config('global.parking_package_price')['permonth_charge'];
            $this->totalParkingcharge = $this->parkingcharge*$this->parking_no;

            $this->total_price = round(($this->item_selected_price+$this->totalParkingcharge),2);
            $this->vat = round($this->total_price* (config('global.TAX_PERCENT') / 100),2);
            $this->grand_total_price = round(($this->total_price+$this->vat),2);
            $this->facilitiesGlobalList = Facilities::all();
            $this->checkAvailability();
            //$this->dispatchBrowserEvent('datePicker');
            return view('livewire.workspace_details');
        }
    }

    public function getContactSubmit(){
        $name = $this->bc_c_name;
        $email = $this->bc_c_email;
        $phone = $this->bc_c_phone;
        $sub = 'Business Center Contact from Website we-work.ae';
        $mess = $this->bc_c_message;
        $mailData = [
        'url' => 'https://we-work.ae/',
        ];
        $send_mail = $this->admin_email;
        Mail::to($send_mail)->send(new SendMail($name, $email, $phone, $sub, $mess));
        $senderMessage = "thanks for your message , we will reply you in later";
        Mail::to( $email)->send(new
        SendMessageToEndUser($name,$senderMessage,$mailData));
        $this->successEmailResp=true;
        
    }

    public function workSpaceDetails($workspace_id)
    {
        $this->workspace_details=WorkspaceUnits::with(['locationSpace','workSpaceUnitPrice'])->where(['id'=>$workspace_id])->first();
        //dd($this->workspace_details);
    }
    public function addTask()
    {
        $this->deal->tasks()->create([
            'tasktext' => $this->tasktext,
            'taskduedate' => $this->taskduedate,
        ]);
    }



    public function getSelectedDate( $date ) {
        $this->selected_date = $date;
        $this->checkAvailability();
        $this->dispatchBrowserEvent('datePicker');
    }
    public function getSelectedTime( $time ) {
        $this->selected_time = Carbon::parse($time)->format('H:i:s');
        $this->selected_end_time = Carbon::parse($this->selected_time)->addMinutes($this->meetingDurationTime)->format('H:i:s');
        $this->checkAvailability();
        $this->dispatchBrowserEvent('datePicker');
    }

    public function meetingDuration($duration){
        $this->meetingDurationTime = $duration;
        $this->selected_end_time = Carbon::parse($this->selected_time)->addMinutes($this->meetingDurationTime)->format('H:i:s');
        $this->checkAvailability();
        $this->dispatchBrowserEvent('datePicker');
    }

    public function checkAvailability(){
        //dd($this);
        $meeting_date_empty=false;
        if($this->selected_date){
            $meeting_date_empty=true;
        }
        $meeting_time_empty=false;
        if($this->selected_time){
            $meeting_time_empty=true;
        }
        $meeting_duration_empty=false;
        if($this->meetingDurationTime){
            $meeting_duration_empty=true;
        }


        $this->availableBookings=[];
        if($meeting_date_empty && $meeting_time_empty && $meeting_duration_empty){

            $this->availableBookings = Subscriptions::where(['meeting_date'=>$this->selected_date])
                //->whereTime('start_time','<=',Carbon::parse($this->selected_time)->format('H:i:s'))
                ->whereTime('end_time','>',Carbon::parse($this->selected_time)->format('H:i:s'))

                //->whereTime('start_time','>',Carbon::parse($this->selected_time)->addMinutes($this->meetingDurationTime)->format('H:i:s'))
                //->whereTime('end_time','<=',Carbon::parse($this->selected_time)->addMinutes($this->meetingDurationTime)->format('H:i:s'))
                //->whereTime('start_time','>',Carbon::parse($this->selected_time)->addMinutes($this->meetingDurationTime)->format('H:i:s'))
                //->whereTime('start_time','>',Carbon::parse($this->selected_time)->addMinutes($this->meetingDurationTime)->format('H:i:s'))
                //->whereTime('end_time','<',Carbon::parse($this->selected_time)->format('H:i:s'))
                //->whereTime('start_time','<',Carbon::parse($this->selected_time)->addMinutes($this->meetingDurationTime)->format('H:i:s'))
                ->get();
            //dd($this->availableBookings);
            if(count($this->availableBookings)==0){
                $this->available_to_book=true;
                $this->item_selected_price = config('global.meeting_package_price')['permonth_charge']*config('global.meetinDurationsPrice')[$this->meetingDurationTime];
                $this->item_selected_id = config('global.meeting_package_price')['id'];
                $this->selected_package_name = config('global.meeting_package_price')['name'];
                $this->selected_package_credits = config('global.meeting_package_price')['credits'];
                $this->selected_package_min_access= config('global.meeting_package_price')['min_access'];
                $this->selected_package_max_access= config('global.meeting_package_price')['max_access'];
                $this->selected_package_access= '('.config('global.meeting_package_price')['min_access'].' to '.config('global.meeting_package_price')['max_access'].' access)';
                $this->meetinRoomAvailability=true;
                $this->meetinRoomAvailabilityText='Available';
            }
            else
            {
                $this->available_to_book=false;
                $this->meetinRoomAvailability=false;
                $this->showAvailableSlots=true;
                $this->meetinRoomAvailabilityText='Slots Not Available';    
            }
        }
        else{
            $this->meetinRoomAvailabilityText='Select Date and Time';
            
        }
    }

    

    public function payAsYouGo(){
        $this->showpayasgosummary=true;
        $this->showsubscribesummary=false;
        $this->item_selected_price = config('global.single_package_price')['permonth_charge'];
        $this->item_selected_id = config('global.single_package_price')['id'];
        $this->selected_package_name = config('global.single_package_price')['name'];
        $this->selected_package_credits = config('global.single_package_price')['credits'];
        $this->selected_package_min_access= config('global.single_package_price')['min_access'];
        $this->selected_package_max_access= config('global.single_package_price')['max_access'];
        $this->selected_package_access= '('.config('global.single_package_price')['min_access'].' to '.config('global.single_package_price')['max_access'].' access)';
        $this->dispatchBrowserEvent('scroll',[
            'type'=>'top',
            'id'=>"payAsYGScrlDiv"
        ]);
        $this->singleParking=true;
    }

    public function subscribeNow(){
        $this->showpayasgosummary=false;
        $this->showsubscribesummary=true;
        $selected_packageConfig = config('global.open_space_packages')[1];
        $this->selected_package_name=$selected_packageConfig['name'];
        $this->item_selected_id = $selected_packageConfig['id'];
        $this->selected_package_credits=$selected_packageConfig['credits'];
        $this->selected_package_access= '('.$selected_packageConfig['min_access'].' to '.$selected_packageConfig['max_access'].' access)';
        $this->item_selected_price = $selected_packageConfig['permonth_charge'];
        $this->selected_package_min_access= $selected_packageConfig['min_access'];
        $this->selected_package_max_access= $selected_packageConfig['max_access'];
        $this->dispatchBrowserEvent('scroll',[
            'type'=>'top',
            'id'=>"subscribeScrlDiv"
        ]);
        $this->singleParking=false;
    }

    public function subscribeValueChange(){
        $selected_packageConfig = config('global.open_space_packages')[$this->package_subscription];
        $this->selected_package_name=$selected_packageConfig['name'];
        $this->item_selected_id = $selected_packageConfig['id'];
        $this->selected_package_credits=$selected_packageConfig['credits'];
        $this->selected_package_access= '('.$selected_packageConfig['min_access'].' to '.$selected_packageConfig['max_access'].' access)';
        $this->item_selected_price = $selected_packageConfig['permonth_charge'];
        $this->selected_package_min_access= $selected_packageConfig['min_access'];
        $this->selected_package_max_access= $selected_packageConfig['max_access'];
    }

    public function parkingClick()
    {
        if($this->parking==false){
            $this->showParkingQty=false;
            $this->parking_no=0;
            $this->parking=false;
        }else
        {
            $this->parking=true;
            $this->showParkingQty=true;
            $this->parking_no=1;
        }
        $this->dispatchBrowserEvent('datePicker');
    }

    public function meetingParkingClick()
    {
        if($this->parking==false)
        {
            $this->showParkingQty=false;
            $this->parking_no=0;
            $this->parking=false;
        }
        else
        {
            $this->showParkingQty=true;
            $this->parking_no=1;
            $this->parking=true;
        }
        
        $this->dispatchBrowserEvent('datePicker');
    }


    public function parkingNoChange($mode)
    {
        if($this->singleMeetingParking==false)
        {
            if($mode=='-'){
                if($this->meeting_parking_no!=1){
                    $this->parking_no--;
                }
            }
            else{
                $this->parking_no++;
            }
        }
        else
        {
            $this->parking_no=1;
        }
        $this->dispatchBrowserEvent('datePicker');
    }


    public function meetingParkingNoChange($mode)
    {
        if($mode=='-'){
            if($this->parking_no!=1){
                $this->parking_no--;
            }
        }
        else{
            $this->parking_no++;
        }
        $this->dispatchBrowserEvent('datePicker');
    }

    public function payNow(){
        $temp_subscription_id = Str::upper(Str::random(16));
        Session::put('temp_subscription_id', $temp_subscription_id);
        $insertTemSubscription = [
            'user_id' => isset(Session::get('customer')->id)?Session::get('customer')->id:null,
            'workspace_unit_id' => $this->workspace_id,
            'session' => Session::get('temp_subscription_id'),
            'package_id' => $this->item_selected_id,
            'package_name' => $this->selected_package_name,
            'credits' => $this->selected_package_credits,
            'package_price' => $this->item_selected_price,
            'package_category' => $this->workspace_details['workspace_category'],
            'min_access' => $this->selected_package_min_access,
            'max_access' => $this->selected_package_max_access,
            'parking' => isset($this->parking)?$this->parking:0,
            'no_of_parking' => $this->parking_no,
            'parking_charge' => $this->totalParkingcharge,
            'total_price' => $this->total_price,
            'vat' => $this->vat,
            'grand_total' => $this->grand_total_price,
            'created_by' => isset(Session::get('customer')->id)?Session::get('customer')->id:null,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ];
        TempSubscriptions::create($insertTemSubscription);
        return redirect()->to('/payment/'.Session::get('temp_subscription_id'));
    }

    public function bookMeetingRoom($meetingRoom){
        $temp_subscription_id = Str::upper(Str::random(16));
        Session::put('temp_subscription_id', $temp_subscription_id);
        $insertTemSubscription = [
            'user_id' => isset(Session::get('customer')->id)?Session::get('customer')->id:null,
            'workspace_unit_id' => $this->workspace_id,
            'session' => Session::get('temp_subscription_id'),
            'package_id' => $this->item_selected_id,
            'package_name' => $this->selected_package_name,
            'package_category' => $this->workspace_details['workspace_category'],
            'credits' => $this->selected_package_credits,
            'package_price' => $this->item_selected_price,
            'min_access' => $this->selected_package_min_access,
            'max_access' => $this->selected_package_max_access,
            'parking' => isset($this->parking)?$this->parking:0,
            'no_of_parking' => $this->parking_no,
            'parking_charge' => $this->totalParkingcharge,
            'total_price' => $this->item_selected_price,
            'vat' => $this->vat,
            'grand_total' => $this->grand_total_price,
            'created_by' => isset(Session::get('customer')->id)?Session::get('customer')->id:null,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ];
        if($this->selected_date){
            $insertTemSubscription['meeting_date']=Carbon::parse($this->selected_date)->format('Y-m-d');
        }
        if($this->selected_time){
            $insertTemSubscription['meeting_time']=Carbon::parse($this->selected_time)->format('H:i:s');
            $insertTemSubscription['duration']=$this->meetingDurationTime;
            $insertTemSubscription['start_time']=Carbon::parse($this->selected_time)->format('H:i:s');
            $insertTemSubscription['end_time']=Carbon::parse($this->selected_time)->addMinutes($insertTemSubscription['duration'])->format('H:i:s');
            
        }
        TempSubscriptions::create($insertTemSubscription);
        return redirect()->to('/payment/'.Session::get('temp_subscription_id'));

    }

    public function doLogin()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            
            $customer = Customers::where(["email" => $this->email])->first();
            auth()->login($customer, $this->remember_me);
            Session::put('customer', $customer);

            // Set Flash Message
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"You have been successfully login..!"
            ]);
            $this->showAuthPannel=false;
            $this->showPaymentPannel=true;
            
        }else{
            // Set Flash Message
            $this->dispatchBrowserEvent('alert',[
                'type'=>'error',
                'message'=>"Email and password are wrong...!"
            ]);
        }
        $this->dispatchBrowserEvent('refresh');
    }
 
    public function doForgorPassword()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $customers = Customers::where(['email'=>$this->email])->first();
        
        if($customers)
        {
            $token = Str::random(64);
            DB::table('password_resets')->insert([
                'email' => $customers->email, 
                'token' => $token, 
                'created_at' => Carbon::now()
            ]);
            $data = [
                'email' => $customers->email, 
                'token' => $token, 
                'created_at' => Carbon::now()
            ];

            Mail::to($customers->email)->send( new ForgetPassword($data));
            
            
                /*
                DB::table('password_resets')->insert([
                  'email' => $customers->email, 
                  'token' => $token, 
                  'created_at' => Carbon::now()
                ]);

                $data = [
                  'email' => $customers->email, 
                  'token' => $token, 
                  'created_at' => Carbon::now()
                ];

                Mail::to($customers->email)->send( new ForgetPassword($data));*/

            $this->forgotpassmessageShow=true;
            $this->forgotpassmessage='We have e-mailed your password reset link!';
            $this->forgotpassmessageStatus='success';

        }
        else
        {
            $this->forgotpassmessageShow=true;
            $this->forgotpassmessage='Account not existing!';
            $this->forgotpassmessageStatus='error';

        }

        
    }
 
    public function registerStore()
    {
        $this->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|min:6',
        ]);

 
        $this->password = Hash::make($this->password); 
 
        $data = [ 'name' => $this->name, 
                  'mobile' => $this->mobile,
                  'email' => $this->email,
                  'password' => $this->password
                ];
 
        Customers::create($data);
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"You have been successfully registered...!"
        ]);

        $this->signInPannel();
 
    }

    public function signUpPannel(){
        $this->heading = 'Sign Up';
        $this->showusername=true;
        $this->showusermobile=true;
        $this->showuseremail=true;
        $this->showForGotPasswordLink=false;
        $this->showSignUpLink=false;
        $this->showSignInLink=true;
        $this->showRememberCheck=false;
        $this->showSignInButton=false;
        $this->showSignUpButton=true;
        $this->showForGotPasswordButton=false;
    }

    public function signInPannel(){
        $this->password='';
        $this->heading = 'Sign In';
        $this->showusername=false;
        $this->showusermobile=false;
        $this->showuserpassword=true;
        $this->showuseremail=true;
        $this->showForGotPasswordLink=true;
        $this->showSignUpLink=true;
        $this->showSignInLink=false;
        $this->showRememberCheck=true;
        $this->showSignInButton=true;
        $this->showSignUpButton=false;
        $this->showForGotPasswordButton=false;
    }

    public function showForgotPasswordPannel(){
        $this->heading = 'Forgot Password';
        $this->showusername=false;
        $this->showusermobile=false;
        $this->showuserpassword=false;
        $this->showuseremail=true;
        $this->showForGotPasswordLink=false;
        $this->showSignUpLink=false;
        $this->showSignInLink=true;
        $this->showRememberCheck=false;
        $this->showSignInButton=false;
        $this->showSignUpButton=false;
        $this->showForGotPasswordButton=true;
    }
}
