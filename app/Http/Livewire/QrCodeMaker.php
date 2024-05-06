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

class QrCodeMaker extends Component
{
    public function render()
    {
        return view('livewire.qr-code-maker');
    }
}
