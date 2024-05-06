<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Logout extends Component
{
    public function logout() {
        session()->forget('customer');
        auth()->logout();
        $this->dispatchBrowserEvent('refresh');
    }

    public function render()
    {
        return view('livewire.auth.logout');
    }
}
