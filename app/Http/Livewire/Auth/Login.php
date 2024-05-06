<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Carbon\Carbon;
use Session;

use App\Models\Customers;


class Login extends Component
{
    public $name, $mobile, $email, $password, $remember_me;
    public $showuserpassword=true, $showuseremail=true, $showForGotPasswordLink=true, $showSignUpLink=true, $showSignInLink=false, $showRememberCheck=true, $showSignInButton=true, $showSignUpButton=false, $showForGotPasswordButton=false;
    public $heading = 'Sign In';

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function signInPannel(){
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
