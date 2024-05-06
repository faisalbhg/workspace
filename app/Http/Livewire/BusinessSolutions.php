<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Mail;
use Carbon\Carbon;
use Session;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

use App\Models\BusinessSolutionRequests;

class BusinessSolutions extends Component
{
    public $service_name;
    public $successEmailResp=false,$name, $company_name, $location, $address, $email, $phone, $message,$admin_email="support@we-work.ae";
    

    public function render()
    {
        return view('livewire.business-solutions');
    }

    public function businessSolutionRequestClear(){
        $this->successEmailResp=false;
        $this->name='';
        $this->service_name='';
        $this->company_name='';
        $this->location='';
        $this->address='';
        $this->email='';
        $this->phone='';
        $this->message='';
    }

    public function submitBusinessSolutionRequest(){

        $insertBSRData = [
            'name'=>$this->name,
            'service_name'=>$this->service_name,
            'company_name'=>$this->company_name,
            'location'=>$this->location,
            'address'=>$this->address,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'message'=>$this->message,
            'status'=>0,
            'is_email'=>0,
        ];


        $insert = BusinessSolutionRequests::create($insertBSRData);
        $mailData = [
        'url' => 'https://we-work.ae/',
        ];
        $send_mail = $this->admin_email;
        $sub = $this->company_name.' :: Business Solution Request';
        //Mail::to($send_mail)->send(new SendMail($this->name, $this->email, $this->phone, $sub, $this->message));
        $senderMessage = "Thanks for interesting with we work business solutions , we will contact you soon..!";
        //Mail::to( $email)->send(new SendMessageToEndUser($this->name,$senderMessage,$mailData));
        //$this->dispatchBrowserEvent('closeBusinessSolutionRequest');
        //BusinessSolutionRequests::where(['id'=>$insert->id])->update(['is_email'=>1]);
        $this->successEmailResp=true;
        $this->name='';
        $this->service_name='';
        $this->company_name='';
        $this->location='';
        $this->address='';
        $this->email='';
        $this->phone='';
        $this->message='';

    }
}
