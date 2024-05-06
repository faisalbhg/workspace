<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

use DB; 

use Carbon\Carbon;
use Session;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;


use Mail;
use App\Mail\OrientationEmail;

use App\Models\OrientationEvent as OrientationEventModel;

class OrientationEvent extends Component
{
    public $attend_status, $company_name, $office_no, $name_aof_attendee, $mobile_number, $email, $interested_to_join, $prepared_and_ready, $facing_any_challenges;
    public $successEmailResp=false, $admin_email="support@we-work.ae";
    
    public function render()
    {
        return view('livewire.orientation-event');
    }

    public function saveRegistration()
    {
        $this->validate([
            'attend_status' => 'required',
            'company_name' => 'required',
            'office_no' => 'required',
            'name_aof_attendee' => 'required',
            'mobile_number' => 'required',
            'email' => 'required|email',
            'interested_to_join' => 'required',
            'prepared_and_ready' => 'required',
            'facing_any_challenges' => 'required',
        ]);

        $registrationVal['attend_status'] = $this->attend_status;
        $registrationVal['company_name'] = $this->company_name;
        $registrationVal['office_no'] = $this->office_no;
        $registrationVal['name_aof_attendee'] = $this->name_aof_attendee;
        $registrationVal['mobile_number'] = $this->mobile_number;
        $registrationVal['email'] = $this->email;
        $registrationVal['interested_to_join'] = $this->interested_to_join;
        $registrationVal['prepared_and_ready'] = $this->prepared_and_ready;
        $registrationVal['facing_any_challenges'] = $this->facing_any_challenges;

        $registration = OrientationEventModel::create($registrationVal);

        if($this->attend_status!=3){
            $data = $registrationVal;
            Mail::to($this->admin_email)->send(new OrientationEmail($data));
            Mail::to($this->email)->send(new OrientationEmail($data));
        }

        

        $this->attend_status = '';
        $this->company_name = '';
        $this->office_no = '';
        $this->name_aof_attendee = '';
        $this->mobile_number = '';
        $this->email = '';
        $this->interested_to_join = '';
        $this->prepared_and_ready = '';
        $this->facing_any_challenges = '';

        $this->successEmailResp=true;
    }


}
