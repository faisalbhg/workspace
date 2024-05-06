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


class CustomerAuth extends Component
{
    //Signin SignUp
    public $showusername=false, $showAuthPannel=true, $showuserpassword=true, $showusermobile=false, $showuseremail=true, $showPaymentPannel=false, $showForGotPasswordLink=true, $showSignUpLink=true, $showSignInLink=false, $showRememberCheck=true, $showSignInButton=true, $showSignUpButton=false, $showForGotPasswordButton=false;
    public $heading = 'Sign In';
    public $cus_name, $cus_mobile, $cus_email, $cus_password, $cus_remember_me;

    public function render()
    {
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

        return view('livewire.customer-auth');
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
}
