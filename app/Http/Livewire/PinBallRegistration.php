<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Carbon\Carbon;
use Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

use Mail;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use App\Mail\TableTennisEmail;

use App\Models\PinballRegistration as PinBallRegistrationModal;
use App\Models\PinballRegistrationQuestion;


class PinBallRegistration extends Component
{
    public $successEmailResp=false,$name, $email, $mobile, $company, $qtn1, $qtn2, $qtn3,$admin_email="support@we-work.ae", $registrationClosed=false;

    public function render()
    {
        $this->registrationClosed=true;
        return view('livewire.pin-ball-registration');
    }

    public function getRegistrationSubmit(){
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'company' => 'required',
            'qtn1' => 'required',
            'qtn2' => 'required',
            'qtn3' => 'required',
        ]);

        $registrationVal['name'] = $this->name;
        $registrationVal['email'] = $this->email;
        $registrationVal['mobile'] = $this->mobile;
        $registrationVal['company'] = $this->company;
        $registrationVal['qtn1'] = $this->qtn1;
        $registrationVal['qtn2'] = $this->qtn2;
        $registrationVal['qtn3'] = $this->qtn3;
        $registrationVal['status'] = 1;
        $registrationVal['is_active'] = 1;

        $registration = PinBallRegistrationModal::create($registrationVal);
        $registration_id = $registration->id;

        $sub = 'Confirmation of Registration - WeWork Table Tennis Championship Sponsored by Roastery Station';
        $mess = 'Thank you for registering for the WeWork Table Tennis Championship! We are thrilled to have you on board for what promises to be an exciting and competitive event.';
        $mailData = [
        'url' => 'https://we-work.ae/',
        'userData'=>$registrationVal,
        'message' => $mess,
        'reg_number' => 'WWRS'.$registration_id,
        'company' => $this->company
        ];
        $send_mail = $this->admin_email;
        Mail::to($send_mail)->send(new TableTennisEmail($this->name, $this->email, $sub, $mailData));
        Mail::to($this->email)->send(new TableTennisEmail($this->name, $this->email, $sub, $mailData));

        $this->name='';
        $this->email='';
        $this->mobile='';
        $this->company='';
        $this->qtn1='';
        $this->qtn2='';
        $this->qtn3='';

        $this->successEmailResp=true;

    }
}
