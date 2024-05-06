<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Carbon\Carbon;
use Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


use App\Models\Customers;
use App\Models\WorkspaceUnits;
use App\Models\Facilities;
use App\Models\TempSubscriptions;
use App\Models\Subscriptions;
use App\Models\Payments;
use App\Models\Bookings;

use Livewire\WithPagination;

class Profile extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $customer_details;
    public $bookingDetails;
    public $name, $email, $mobile;

    public function render()
    {
        $customer_details = Customers::where(['id'=>Session::get('customer')->id])->first();
        $this->name = $customer_details->name;
        $this->email = $customer_details->email;
        $this->mobile = $customer_details->mobile;

        $data['subscriptions'] = Subscriptions::with('workspaceUnitsDetails')->where(['customer_id'=>Session::get('customer')->id])->paginate(10);
        //dd($data);
        return view('livewire.profile',$data);
    }

    public function subscriptionsClick(){
        $this->dispatchBrowserEvent('scroll',[
            'type'=>'top',
            'id'=>"subscriptionTop"
        ]);
    }

    public function openBookingSubscription($subscriptionId){
        $this->bookingDetails = Subscriptions::with(['bookinsInfo','workspaceUnitsDetails'])->where(['customer_id'=>Session::get('customer')->id,'id'=>$subscriptionId])->first();
        $this->dispatchBrowserEvent('openBookingInfoModel');
    }
}
