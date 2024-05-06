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

class BusinessSolutionRequest extends Component
{
    public $successEmailResp=false,$name, $company_name, $location, $address, $email, $phone, $message,$admin_email="support@we-work.ae";
    public $serviceValue;

    public function render()
    {
        return view('livewire.business-solution-request');
    }

    public function submitBusinessSolutionRequest(){
        dd($this);
    }
}
