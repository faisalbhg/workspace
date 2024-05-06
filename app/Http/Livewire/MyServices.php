<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Customers;
use App\Models\ServiceRequest;

use Carbon\Carbon;
use Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Livewire\WithPagination;

class MyServices extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $service_type, $count=1, $file, $message;

    public function render()
    {
        ServiceRequest::where(['id'=>1])->update(['service_status'=>1]);
        $data['serviceRequests'] = ServiceRequest::with(['customerDetails'])->where(['customer_id'=>Session::get('customer')->id])->paginate(20);
        return view('livewire.my-services',$data);
    }

    public function submitServiceequest()
    {
        $this->validate([
            'service_type' => 'required',
            'file' => 'required',
        ]);

        $price = Config('global.services.price')[$this->service_type];
        $vat = round((Config('global.services.price')[$this->service_type]*$this->count)* (config('global.TAX_PERCENT') / 100),2);
        $grandTotal = $price+$vat;
        $serviceRequest = ServiceRequest::create([
            'customer_id'=>Session::get('customer')->id,
            'service_type'=>$this->service_type,
            'count'=>$this->count,
            'price'=>$price,
            'vat'=>$vat,
            'grand_total'=>$grandTotal,
            'file'=>$this->file->store('service_request', 'public'),
            'message'=>$this->message,
            'is_active'=>1,
            'created_by' => Session::get('customer')->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $serviceRequestNumber = 'WW-SR-'.sprintf("%04d", $serviceRequest->id);
        ServiceRequest::where(['id'=>$serviceRequest->id])->update(['service_request_number'=>$serviceRequestNumber]);


        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Request submited successfully..!"
        ]);
    }


}
