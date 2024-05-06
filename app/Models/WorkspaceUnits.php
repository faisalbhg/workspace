<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkspaceUnits extends Model
{
    use HasFactory;

    protected $table='workspace_units';

    public function locationSpace()
    {
        return $this->belongsTo(Locations::class,'location_id','id');
    }

    public function workSpaceUnitPrice()
    {
        return $this->hasMany(WorkspaceUnitPrices::class,'workspace_unit_id','id')->orderBy('price','ASC');
    }
}
