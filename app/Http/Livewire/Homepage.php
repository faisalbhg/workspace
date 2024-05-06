<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

use Livewire\WithPagination;
use Carbon\Carbon;
use Session;


use App\Models\Locations;
use App\Models\WorkspaceUnits;
use App\Models\Facilities;
use App\Models\Testimonials;

class Homepage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $workspaceUnits = [], $facilitiesGlobalList = [];
    public $search_ws='';
    public $locations=[];
    public $successEmailResp=false,$name, $email, $phone, $bc_c_message,$admin_email="support@we-work.ae";

    public function render()
    {

        $this->facilitiesGlobalList = Facilities::all();
        $workspaceUnitsQuery = WorkspaceUnits::with(['locationSpace','workSpaceUnitPrice']);
        if($this->search_ws)
        {
            //$workspaceUnitsQuery->orWhereRelation('locationSpace', 'title', 'like', "%{$this->search_ws}%");
            $workspaceUnitsQuery->where(function ($query) {
                                    $query->orWhereRelation('locationSpace', 'title', 'like', "%{$this->search_ws}%")
                                    ->orWhereRelation('locationSpace', 'address', 'like', "%{$this->search_ws}%");
                                    }
                                );
        }
        $this->locations = Locations::all();
        $data['workspaces'] = $workspaceUnitsQuery->where(['is_active'=>1])->orderBy('display_order','ASC')->paginate(10);
        $data['testimonials'] = Testimonials::where(['status'=>1])->orderBy('id','DESC')->get();
        
        $this->dispatchBrowserEvent('listenMap',['locations'=>$this->locations]);
        return view('livewire.homepage',$data);
    }

    public function getContactSubmit(){
        $name = $this->name;
        $email = $this->email;
        $phone = $this->phone;
        $sub = 'Contact Us from Website we-work.ae';
        $mess = $this->bc_c_message;
        $mailData = [
        'url' => 'https://we-work.ae/',
        ];
        $send_mail = $this->admin_email;
        Mail::to($send_mail)->send(new SendMail($name, $email, $phone, $sub, $mess));
        $senderMessage = "thanks for your message , we will reply you in later";
        Mail::to( $email)->send(new
        SendMessageToEndUser($name,$senderMessage,$mailData));
        $this->successEmailResp=true;
        
    }
}
