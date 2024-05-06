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


class Register extends Component
{
    public $name, $mobile, $email, $password, $remember_me;
    
    public function render()
    {
        return view('livewire.auth.register');
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

        return redirect()->to('/sign-in');
 
    }
}
