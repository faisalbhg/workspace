<?php

namespace App\Http\Livewire;

use Livewire\Component;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Carbon\Carbon;
use Session;

use App\Models\Customers;
use App\Models\WorkspaceUnits;
use App\Models\Facilities;
use App\Models\TempSubscriptions;
use App\Models\Subscriptions;
use App\Models\Payments;
use App\Models\Bookings;
use App\Models\BussinessCenterClients;

class Payment extends Component
{
    public $tempSubscriptions=[];
    public $showusername=false, $showAuthPannel=true, $showuserpassword=true, $showusermobile=false, $showuseremail=true, $showPaymentPannel=false, $showForGotPasswordLink=true, $showSignUpLink=true, $showSignInLink=false, $showRememberCheck=true, $showSignInButton=true, $showSignUpButton=false, $showForGotPasswordButton=false;
    public $heading = 'Sign In';
    public $name, $mobile, $email, $password, $remember_me;
    public $listPaymentCards=[], $payment_id, $card_cvv, $card_exp_month_year, $card_number, $card_name, $card_expiry, $card_cvv1, $default_payment=[], $default_card_cvv=[];
    public $new_card_cvv, $new_card_name, $new_card_number, $new_exp_month_year;
    public $booking_number;
    public $default_payment_id, $default_card_name, $default_card_number, $default_card_expiry;
    public $temp_session;
    public $item_total_price,$vat_price,$grand_total_price;
    public $show_discount=false, $discount_amount=0, $discount_type, $discount_desc;


    protected $listeners = [
        'deleteCategory'=>'destroy'
    ];

    public function mount(Request $request) {
        $this->route = url()->previous();

        $temp_session = $request->temp_session;
        $this->temp_session = $temp_session;
    }

    public function render()
    {

        $this->tempSubscriptions = TempSubscriptions::where(['session'=>$this->temp_session])->first();
        if(empty($this->tempSubscriptions))
        {
            redirect($this->route);
        }
        if(auth()->user()){
            $this->item_total_price = $this->tempSubscriptions->total_price;

            if($this->tempSubscriptions->package_category==2)
            {
                $existingCustomer = BussinessCenterClients::where(['contact_email'=>Session::get('customer')->email])->first();
                if($existingCustomer){

                    $this->show_discount=true;
                    $this->discount_type=1;
                    $this->discount_desc="existing client booking discount";

                    $previousBookingInfo = Subscriptions::with(['customerDetails'])->where(function ($query) {
                        $query->whereRelation('customerDetails', 'email', '=', Session::get('customer')->email);
                        }
                    )->where(['meeting_date'=>$this->tempSubscriptions->meeting_date,'package_category'=>2])->get();
                    if(count($previousBookingInfo)==0){
                        $this->show_discount=true;
                        $this->discount_amount=100;
                        
                        //dd($this->tempSubscriptions->duration);
                        if($this->tempSubscriptions->duration=="60"){


                            $this->vat_price = round(($this->tempSubscriptions->total_price-$this->discount_amount)* (config('global.TAX_PERCENT') / 100),2);

                            $this->grand_total_price = round(($this->tempSubscriptions->total_price+$this->tempSubscriptions->parking_charge-$this->discount_amount+$this->vat_price),2);
                        }
                        else
                        {
                            $extraDiscount = ($this->tempSubscriptions->total_price-$this->discount_amount)/2;
                            $this->discount_amount=$this->discount_amount+$extraDiscount;
                            $subtotal = ($this->tempSubscriptions->total_price-$this->discount_amount)+$this->tempSubscriptions->parking_charge;

                            $this->vat_price = round(($subtotal)* (config('global.TAX_PERCENT') / 100),2);
                            $this->grand_total_price = round((($this->tempSubscriptions->total_price-$this->discount_amount)+$this->tempSubscriptions->parking_charge+$this->vat_price),2);
                        }
                        $this->discount_type=1;
                        $this->discount_desc="existing client booking discount";
                    }
                    else if(count($previousBookingInfo)>0){


                        $this->show_discount=true;
                        $this->discount_amount=$this->tempSubscriptions->total_price/2;
                        $this->discount_type=1;
                        $this->discount_desc="existing client booking discount";

                        $this->vat_price = round(($this->tempSubscriptions->total_price-$this->discount_amount)* (config('global.TAX_PERCENT') / 100),2);
                        $this->grand_total_price = round(((($this->tempSubscriptions->total_price-$this->discount_amount)/2)+$this->tempSubscriptions->parking_charge+$this->vat_price),2);
                    }

                }
                else
                {
                    $this->item_total_price = $this->tempSubscriptions->total_price;
                    $this->vat_price = round(($this->tempSubscriptions->total_price)* (config('global.TAX_PERCENT') / 100),2);
                    $this->grand_total_price = round(($this->tempSubscriptions->total_price+$this->tempSubscriptions->parking_charge-$this->discount_amount+$this->vat_price),2);
                }
            }
            else
            {

                $this->item_total_price = $this->tempSubscriptions->total_price;
                $this->vat_price = round(($this->tempSubscriptions->total_price)* (config('global.TAX_PERCENT') / 100),2);
                $this->grand_total_price = round(($this->tempSubscriptions->total_price+$this->tempSubscriptions->parking_charge-$this->discount_amount+$this->vat_price),2);

            }
            
            
            


            

            $this->showAuthPannel=false;
            $this->listPaymentCards = Payments::where(['customer_id'=>Session::get('customer')->id])->get();

            $paymentInfoDefault = Payments::where(['customer_id'=>Session::get('customer')->id,'default_card'=>1])->first();
            if(!empty($paymentInfoDefault)){
                $this->setDefaultCard($paymentInfoDefault);
            }
            //if(count($this->listPaymentCards)==0){
                $this->showPaymentPannel=true;
            //}
        }
        else
        {
            $this->item_total_price = $this->tempSubscriptions->total_price;
            $this->vat_price = round(($this->tempSubscriptions->total_price-$this->discount_amount)* (config('global.TAX_PERCENT') / 100),2);
            $this->grand_total_price = round(($this->tempSubscriptions->total_price+$this->tempSubscriptions->parking_charge-$this->discount_amount+$this->vat_price),2);
        }

        


        return view('livewire.payment');
    }

    public function newPaymentCard(){
        $this->showPaymentPannel=true;
        $this->dispatchBrowserEvent('cardPaymentPannel');        
    }

    public function setDefaultCard($defaultCardDetails)
    {
        $this->default_payment=[];
        $this->default_payment_id = $defaultCardDetails->id;
        $this->default_payment[$defaultCardDetails->id]=$defaultCardDetails->default_card;
        $this->default_card_name = $defaultCardDetails->payment_name_on_card;
        $this->default_card_number = $defaultCardDetails->payment_card_number;
        $this->default_card_expiry = $defaultCardDetails->payment_exp_month.'/'.$defaultCardDetails->payment_exp_year;
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

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
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

    

    public function payNewCardSubmit()
    {
        $this->validate([
            'new_card_cvv' => 'required|min:3|max:3',
            'new_card_name' => 'required',
            'new_card_number' => 'required',
            'new_exp_month_year' => 'required',
        ]);
        $insertPayment=[
            'customer_id' => Session::get('customer')->id,
            'payment_name_on_card' => $this->new_card_name,
            'payment_card_number' => str_replace(" ", "", $this->new_card_number),
            'payment_exp_month' => explode("/",$this->new_exp_month_year)[0],
            'payment_exp_year' => explode("/",$this->new_exp_month_year)[1],
            'default_card' => 1,
            'save_as_future_use' => 1,
            'created_by' => Session::get('customer')->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
        $paymentInsert = Payments::create($insertPayment);

        //dd($paymentInfoDefault);
        $this->payment_id = $paymentInsert->id;
        $this->card_name = $insertPayment['payment_name_on_card'];
        $this->card_number = $insertPayment['payment_card_number'];
        $this->card_expiry = $this->new_exp_month_year;
        $this->card_cvv = $this->new_card_cvv;
        $this->saveSubmitPayNow($paymentInsert->id);
    }

    public function payDefaultCardSubmit($paymentId){
        $this->validate([
            'default_card_cvv.'.$paymentId => 'required|min:3|max:3',
        ]);
        $this->payment_id = $this->default_payment_id;
        $this->card_name = $this->default_card_name;
        $this->card_number = $this->default_card_number;
        $this->card_expiry = $this->default_card_expiry;
        $this->card_cvv = $this->default_card_cvv;
        $this->saveSubmitPayNow($this->payment_id);
    }

    public function saveCardDetails()
    {
        $this->validate([
            'card_cvv' => 'required|min:3|max:3',
            'payment_name_on_card' => 'required',
            'payment_card_number' => 'required',
            'card_exp_month_year' => 'required',
        ]);
        $insertPayment=[
            'customer_id' => Session::get('customer')->id,
            'payment_name_on_card' => $this->card_name,
            'payment_card_number' => str_replace(" ", "", $this->card_number),
            'payment_exp_month' => explode("/",$this->card_exp_month_year)[0],
            'payment_exp_year' => explode("/",$this->card_exp_month_year)[1],
            'save_as_future_use' => 1,
            'created_by' => Session::get('customer')->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
        $paymentInsert = Payments::create($insertPayment);
    }

    public function defaultPaymentOption($defaultPaymentId){
        $defaultPayment = Payments::where(['customer_id'=>Session::get('customer')->id,'id'=>$defaultPaymentId])->first();
        $this->setDefaultCard($defaultPayment);
        Payments::where(['customer_id'=>Session::get('customer')->id])->update(['default_card'=>0]);
        Payments::find($defaultPaymentId)->update(['default_card'=>1]);
    }

    public function proceedPaymentSubmit(){
        $temp_subscription_data = TempSubscriptions::where(['session'=>$this->temp_session])->first();
        $insertBooking = [
            'customer_id' => Session::get('customer')->id,
            'booking_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'payment_id' => 1,
            'payment_type'=>2,
            'payment_status' => 0,
            'booking_status' => 0,
            'created_by' => Session::get('customer')->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];

        $insertBooking['booking_amount'] = $temp_subscription_data->total_price;
        $insertBooking['vat'] = $temp_subscription_data->vat;
        $insertBooking['grand_total'] = $temp_subscription_data->grand_total;

        if($this->show_discount)
        {
            $insertBooking['discount'] = 1;
            $insertBooking['discount_amount'] = $this->discount_amount;
            $insertBooking['booking_amount'] = $temp_subscription_data->total_price;
            $insertBooking['vat'] = round($this->item_total_price* (config('global.TAX_PERCENT') / 100),2);
            $insertBooking['grand_total'] = $this->grand_total_price;
        }
        else
        {
            $insertBooking['booking_amount'] = $temp_subscription_data->total_price;
            $insertBooking['vat'] = $temp_subscription_data->vat;
            $insertBooking['grand_total'] = $temp_subscription_data->grand_total;
        }
        $bookingInsert = Bookings::create($insertBooking);
        
        $this->booking_number = 'WW'.Carbon::now()->format('y').Carbon::now()->format('m').Carbon::now()->format('d').$bookingInsert->id;
        Bookings::where(['id'=>$bookingInsert->id])->update(['booking_number'=>$this->booking_number]);
        //TempSubscriptions::where(['session'=>$this->temp_session])->update(['session'=>$this->booking_number]);

        $insertSubscription=[
            'customer_id' => Session::get('customer')->id,
            'workspace_unit_id'=> $temp_subscription_data->workspace_unit_id,
            'booking_id' => $bookingInsert->id,
            'booking_number' => $this->booking_number,
            'booking_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'booking_starts_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'booking_ends_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
            'package_id' => $temp_subscription_data->package_id,
            'package_name' => $temp_subscription_data->package_name,
            'package_category' => $temp_subscription_data->package_category,
            'credits' => $temp_subscription_data->credits,
            'package_price' => $temp_subscription_data->package_price,
            'min_access' => $temp_subscription_data->min_access,
            'max_access' => $temp_subscription_data->max_access,
            'meeting_date' => isset($temp_subscription_data->meeting_date)?$temp_subscription_data->meeting_date:null,
            'meeting_time' => isset($temp_subscription_data->meeting_time)?$temp_subscription_data->meeting_time:null,
            'start_time' => isset($temp_subscription_data->start_time)?$temp_subscription_data->start_time:null,
            'end_time' => isset($temp_subscription_data->end_time)?$temp_subscription_data->end_time:null,
            'duration' => isset($temp_subscription_data->duration)?$temp_subscription_data->duration:null,
            'parking' => $temp_subscription_data->parking,
            'no_of_parking' => $temp_subscription_data->no_of_parking,
            'parking_charge' => $temp_subscription_data->parking_charge,
            'total_price' => $temp_subscription_data->total_price,
            'vat' => $temp_subscription_data->vat,
            'grand_total' => $temp_subscription_data->grand_total,
            'status' => 1,
            'finish_status'=>0,
            'cancel_status'=>0,
            'created_by' => Session::get('customer')->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];

        if($this->show_discount)
        {
            $insertSubscription['discount'] = 1;
            $insertSubscription['discount_amount'] = $this->discount_amount;
            $insertSubscription['discount_type'] = $this->discount_type;
            $insertSubscription['discount_desc'] = $this->discount_desc;

            $insertSubscription['total_price'] = $temp_subscription_data->total_price;
            $insertSubscription['vat'] = round($this->item_total_price* (config('global.TAX_PERCENT') / 100),2);
            $insertSubscription['grand_total'] = $this->grand_total_price;
        }

        Subscriptions::create($insertSubscription);

        /*$expl_car_expiry = explode("/",$this->card_expiry);
        $sendPaymentData = [
            "action"=>"PURCHASE",
            "currency" => config('global.CURRENCY'),
            "amount" => $temp_subscription_data->grand_total,
            "emai" => Session::get('customer')->email,
            "booking_number" => $this->booking_number,
            "firstName" => Session::get('customer')->name,
            "lastName" => Session::get('customer')->name,
            "address1" => "Customer Address",
            "city" => "City",
            "card_number" => str_replace(" ", "", $this->card_number),
            "expiry" =>'20'.$expl_car_expiry[1].'-'.sprintf("%02d", $expl_car_expiry[0]),
            "cvv" => $this->card_cvv,
            "cardholderName" => $this->card_name,
        ];
        $response = Http::withBasicAuth('onlinewebtutor', 'admin123')->post(config('global.card_payment_url'),$sendPaymentData);
        $response = json_decode((string) $response->getBody()->getContents(), true);
        $order_data = json_decode($response['order_data']);*/

        if($this->grand_total_price>0)
        {

            $sendPaymentLinkData = [
                "paymnet_link_expiry"=>Carbon::now()->addDays(1)->format('Y-m-d H:i:s'),
                "amount"=>$temp_subscription_data->grand_total,
                //"amount"=>1,
                "emailAddress"=>Session::get('customer')->email,
                "firstName"=>Session::get('customer')->name,
                "customer_mobile"=>Session::get('customer')->phone,
                "lastName"=>Session::get('customer')->name,
                "address1"=>"Dubai",
                "city"=>"Bur Dubai",
                "countryCode"=>"UAE",
                "orderReference"=>$this->booking_number,
                "description"=>"WE Work Co Workspace"
            ];
            $response = Http::withBasicAuth('onlinewebtutor', 'admin123')->post(config('global.paymenkLink_payment_url'),$sendPaymentLinkData);
            $response = json_decode((string) $response->getBody()->getContents(), true);
            $merchant_reference = $response['merchant_reference'];
            Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>0,'booking_status'=>0]);
        }
        else
        {
            Bookings::where(['booking_number'=>$this->booking_number])->update(['payment_status'=>1,'booking_status'=>1]);
        }

        /*$order_state = $order_data->state;
        $merchant_reference = $response['merchant_reference'];
        switch($order_state){
            case 'AUTHORISED':
            Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>1,'booking_status'=>1]);
            break;
            case 'PURCHASED':
            Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>1,'booking_status'=>1]);
            break;
            case 'CAPTURED':
            Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>1,'booking_status'=>1]);
            break;
            case 'AWAIT_3DS':

                $cnp3ds_url = $order_data->_links->{'cnp:3ds'}->href;
                $acsurl = $order_data->{'3ds'}->acsUrl;
                $acspareq = $order_data->{'3ds'}->acsPaReq;
                $acsmd = $order_data->{'3ds'}->acsMd;
                $acsterm = url('post-payment-response');
                Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>2,'booking_status'=>2]);
            break;
            case 'FAILED':
            Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>2,'booking_status'=>2]);
            break;
        }*/
        return redirect()->to('/success/'.$this->booking_number);
    }

    public function saveSubmitPayNow($paymentId){
        $temp_subscription_data = TempSubscriptions::where(['session'=>$this->temp_session])->first();
        if(is_array($this->card_cvv))
        {
            $this->card_cvv = $this->card_cvv[$this->payment_id];
        }
        //dd($this->card_expiry);
        $insertBooking = [
            'customer_id' => Session::get('customer')->id,
            'booking_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'booking_amount' => $temp_subscription_data->total_price,
            'vat' => $temp_subscription_data->vat,
            'grand_total' => $temp_subscription_data->grand_total,
            'payment_id' => $this->payment_id,
            'payment_type'=>2,
            'payment_status' => 0,
            'booking_status' => 0,
            'created_by' => Session::get('customer')->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
        $bookingInsert = Bookings::create($insertBooking);
        
        $this->booking_number = 'WW'.Carbon::now()->format('y').Carbon::now()->format('m').Carbon::now()->format('d').$bookingInsert->id;
        Bookings::where(['id'=>$bookingInsert->id])->update(['booking_number'=>$this->booking_number]);
        //TempSubscriptions::where(['session'=>$this->temp_session])->update(['session'=>$this->booking_number]);

        $insertSubscription=[
            'customer_id' => Session::get('customer')->id,
            'workspace_unit_id'=> $temp_subscription_data->workspace_unit_id,
            'booking_id' => $bookingInsert->id,
            'booking_number' => $this->booking_number,
            'booking_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'booking_starts_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'booking_ends_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
            'package_id' => $temp_subscription_data->package_id,
            'package_name' => $temp_subscription_data->package_name,
            'credits' => $temp_subscription_data->credits,
            'package_price' => $temp_subscription_data->package_price,
            'min_access' => $temp_subscription_data->min_access,
            'max_access' => $temp_subscription_data->max_access,
            'parking' => $temp_subscription_data->parking,
            'no_of_parking' => $temp_subscription_data->no_of_parking,
            'parking_charge' => $temp_subscription_data->parking_charge,
            'total_price' => $temp_subscription_data->total_price,
            'vat' => $temp_subscription_data->vat,
            'grand_total' => $temp_subscription_data->grand_total,
            'status' => 1,
            'created_by' => Session::get('customer')->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
        Subscriptions::create($insertSubscription);

        $expl_car_expiry = explode("/",$this->card_expiry);
        
        /*$sendPaymentData = [
            "action"=>"PURCHASE",
            "currency" => config('global.CURRENCY'),
            "amount" => $temp_subscription_data->grand_total,
            "emai" => Session::get('customer')->email,
            "booking_number" => $this->booking_number,
            "firstName" => Session::get('customer')->name,
            "lastName" => Session::get('customer')->name,
            "address1" => "Customer Address",
            "city" => "City",
            "card_number" => str_replace(" ", "", $this->card_number),
            "expiry" =>'20'.$expl_car_expiry[1].'-'.sprintf("%02d", $expl_car_expiry[0]),
            "cvv" => $this->card_cvv,
            "cardholderName" => $this->card_name,
        ];
        $response = Http::withBasicAuth('onlinewebtutor', 'admin123')->post(config('global.card_payment_url'),$sendPaymentData);
        $response = json_decode((string) $response->getBody()->getContents(), true);
        $order_data = json_decode($response['order_data']);*/

        $sendPaymentLinkData = [
            "paymnet_link_expiry"=>Carbon::now()->addDays(1)->format('Y-m-d H:i:s'),
            "amount"=>$temp_subscription_data->grand_total,
            "emailAddress"=>Session::get('customer')->email,
            "firstName"=>Session::get('customer')->name,
            "customer_mobile"=>Session::get('customer')->phone,
            "lastName"=>Session::get('customer')->name,
            "address1"=>"Dubai",
            "city"=>"Bur Dubai",
            "countryCode"=>"UAE",
            "orderReference"=>$this->booking_number,
            "description"=>"WE Work Co Workspace"
        ];
        $response = Http::withBasicAuth('onlinewebtutor', 'admin123')->post(config('global.paymenkLink_payment_url'),$sendPaymentLinkData);
        $response = json_decode((string) $response->getBody()->getContents(), true);
        dd($response);

        $order_state = $order_data->state;
        $merchant_reference = $response['merchant_reference'];
        //dd($merchant_reference);
        switch($order_state){
            case 'AUTHORISED':
            //Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>1,'booking_status'=>1]);
            break;
            case 'PURCHASED':
            Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>1,'booking_status'=>1]);
            break;
            case 'CAPTURED':
            Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>1,'booking_status'=>1]);
            break;
            case 'AWAIT_3DS':

                $cnp3ds_url = $order_data->_links->{'cnp:3ds'}->href;
                $acsurl = $order_data->{'3ds'}->acsUrl;
                $acspareq = $order_data->{'3ds'}->acsPaReq;
                $acsmd = $order_data->{'3ds'}->acsMd;
                $acsterm = url('post-payment-response');
                //Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>2,'booking_status'=>2]);
            break;
            case 'FAILED':
            Bookings::where(['booking_number'=>$merchant_reference])->update(['payment_response'=>json_encode($response),'payment_status'=>2,'booking_status'=>2]);
            break;
        }
        return redirect()->to('/success/'.$this->booking_number);
    }
}
