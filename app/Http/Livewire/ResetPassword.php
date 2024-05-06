<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request; 
use App\Models\Customers;
use DB;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;


class ResetPassword extends Component
{

    public $token, $email, $password, $password_confirmation;

    function mount( Request $request) {
        $token = $request->token;
        $this->token = $token;
        if($token)
        {
            $this->resetPassword($token);

        }
    }

    public function render()
    {
        return view('livewire.reset-password');
    }

    public function resetPassword($token)
    {
        $this->token = $token;
    }

    public function resetPasswordSubmit(){
        $this->validate([
              'email' => 'required|email|exists:customers',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
  
          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $this->email, 
                                'token' => $this->token
                              ])
                              ->first();
  
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
  
          $user = Customers::where('email', $this->email)
                      ->update(['password' => Hash::make($this->password)]);
 
          DB::table('password_resets')->where(['email'=> $this->email])->delete();

          $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Your password has been changed!"
            ]);
  
          return redirect('/')->with('message', 'Your password has been changed!');
    }
}
