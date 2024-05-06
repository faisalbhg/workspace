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


class Thankyou extends Component
{
    public $booking_number;
    public $booking_details=[], $subscription_details=[] ,$workspace_details=[];
    public $payment_redirect_link='';

    function mount( Request $request) {
        $booking_number = $request->booking_number;
        $filter = $request->filter;
        if($booking_number)
        {
            $this->getBookingDetails($booking_number);

        }

    }

    public function render()
    {
        
        return view('livewire.thankyou');
    }

    public function getBookingDetails($booking_number)
    {
        if(!auth()->user()){
            return redirect()->to('/');
        }
        $this->booking_number = $booking_number;
        $this->booking_details = Bookings::where(['booking_number'=>$this->booking_number])->first();
        $bookingDetailsInfo = $this->booking_details;
        if($bookingDetailsInfo->payment_status==0)
        {
            $sendPaymentLinkSynchData = [
                "payment_order_reference"=>$booking_number,
            ];
            $response = Http::withBasicAuth('onlinewebtutor', 'admin123')->post(config('global.paymenkLinkSynch_payment_url'),$sendPaymentLinkSynchData);
            $response = json_decode((string) $response->getBody()->getContents(), true);
            //dd($response);
            if($response['order_response']['status']=='PURCHASED' || $response['order_response']['status'] == 'CAPTURED'){
                Bookings::where(['booking_number'=>$booking_number])->update(['payment_status'=>1,'booking_status'=>1]);
            }
            $this->booking_details = Bookings::where(['booking_number'=>$this->booking_number])->first();
        }
        $this->payment_redirect_link = json_decode($bookingDetailsInfo->payment_response)->payment_redirect_link;
        $this->subscription_details = Subscriptions::where(['booking_number'=>$this->booking_number])->first();
        $subscriptionDetails = $this->subscription_details;
        $this->workspace_details=WorkspaceUnits::with(['locationSpace','workSpaceUnitPrice'])->where(['id'=>$subscriptionDetails->workspace_unit_id])->first();

        
    }

    /*public function payNowPayment($orderNUmber){
        $bookingDetailsInfo = Bookings::where(['booking_number'=>$orderNUmber])->first();
        //$this->payment_redirect_link = json_decode($bookingDetailsInfo->payment_response)->payment_redirect_link;
        $this->dispatchBrowserEvent('openNewTabLink',['urlRedirect'=>$this->payment_redirect_link]);
        //return redirect()->away($payment_redirect_link, "_blank");
    }*/
}
