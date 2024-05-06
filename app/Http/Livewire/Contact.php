<?php

namespace App\Http\Livewire;

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

use Livewire\Component;

class Contact extends Component
{
    public $successEmailResp=false,$name='a', $email, $phone, $bc_c_message,$admin_email="faisal@buhaleeba.ae";

    public function render()
    {
        return view('livewire.contact');
    }

    public function getContactSubmit(){
        $name = $this->name;
        $email = $this->email;
        $phone = $this->phone;
        $sub = 'Contact Us from Website we-work.ae';
        $mess = $this->bc_c_message;
        $mailData = [
        'url' => 'https://we-work.ae/',
        ];
        $send_mail = $this->admin_email;
        Mail::to($send_mail)->send(new SendMail($name, $email, $phone, $sub, $mess));
        $senderMessage = "thanks for your message , we will reply you in later";
        Mail::to( $email)->send(new SendMessageToEndUser($name,$senderMessage,$mailData));
        $this->successEmailResp=true;
        
    }
}
