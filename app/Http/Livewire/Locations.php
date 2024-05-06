<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

use Livewire\Component;

use Carbon\Carbon;
use Session;
use Livewire\WithPagination;


use App\Models\Locations as LocationModel;
use App\Models\WorkspaceUnits;
use App\Models\Facilities;

class Locations extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $facilitiesGlobalList = [], $locations, $search_ws;
    public $selected_date;
    public $selected_time;
    public $location_id;

    function mount( Request $request) {
        $location_id = isset($request->location_id)?$request->location_id:null;
        $filter = $request->filter;
        if($location_id)
        {
            $this->workSpaceList($location_id);

        }

    }

    public function render()
    {
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
        $this->locations = LocationModel::all();
        $this->facilitiesGlobalList = Facilities::all();
        $data['workspaces'] = $workspaceUnitsQuery->where(['is_active'=>1])->paginate(10);
        
        return view('livewire.locations',$data);
    }

    public function workSpaceList($location_id=null)
    {
        if($location_id!=null){
            $this->workspaces=WorkspaceUnits::with(['locationSpace','workSpaceUnitPrice'])->where(['location_id'=>$location_id])->get();
        }
        else
        {
            $this->workspaces=WorkspaceUnits::with(['locationSpace','workSpaceUnitPrice'])->where(['is_active'=>0])->get();
        }
    }
}
