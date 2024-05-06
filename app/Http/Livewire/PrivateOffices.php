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

class PrivateOffices extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $workspaceUnits = [], $facilitiesGlobalList = [];
    public $search_ws='';
    public $locations=[];

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
        $data['workspaces'] = $workspaceUnitsQuery->where(['is_active'=>1,'workspace_category'=>1])->orderBy('display_order','ASC')->paginate(10);
        $this->dispatchBrowserEvent('listenMap',['locations'=>$this->locations]);
        return view('livewire.private-offices', $data);
    }
}
