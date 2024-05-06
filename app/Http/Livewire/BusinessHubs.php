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

use App\Models\BusinessHubs as BusinessHubsModels;

class BusinessHubs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    use WithFileUploads;
    public $successEmailResp=false,$name, $company_logo, $location, $address, $email, $phone, $service,$admin_email="support@we-work.ae";

    public function render()
    {
        $data['businessHubs'] = BusinessHubsModels::where(['status'=>1])->paginate(10);
        return view('livewire.business-hubs', $data);
    }

    public function getContactSubmit(){
        $this->validate([
            'email' => 'required|email',
            'name' => 'required',
            'location' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'service' => 'required',
            'company_logo' => 'required|file|max:22048'
        ]);

        $name = $this->name;
        $email = $this->email;
        $phone = $this->phone;
        $sub = 'Business Networking Hub :: we-work.ae';
        $service = $this->service;


        $insertBHData = [
            'name'=>$name,
            'location' => $this->location,
            'address' => $this->address,
            'email' => $email,
            'phone' => $phone,
            'service' => $service,
            'company_logo'=>$this->company_logo->store('company_logo', 'public'),
            'status' => 0,
        ];


        BusinessHubsModels::create($insertBHData);
        $mailData = [
        'url' => 'https://we-work.ae/',
        ];
        $send_mail = $this->admin_email;
        //Mail::to($send_mail)->send(new SendMail($name, $email, $phone, $sub, $service));
        $senderMessage = "thanks for connecting with we work business networking hub , we will contact you soon..!";
        //Mail::to( $email)->send(new SendMessageToEndUser($name,$senderMessage,$mailData));
        $this->successEmailResp=true;
        $this->name='';
        $this->location='';
        $this->address='';
        $this->email='';
        $this->phone='';
        $this->service='';
        
    }
}
