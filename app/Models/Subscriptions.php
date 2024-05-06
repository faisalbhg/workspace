<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    use HasFactory;

    protected $table='subscriptions';

    protected $fillable = [
        'customer_id',
        'workspace_unit_id',
        'booking_id',
        'booking_number',
        'booking_date',
        'booking_starts_date',
        'booking_ends_date',
        'package_id',
        'package_name',
        'package_category',
        'credits',
        'credits_used',
        'package_price',
        'min_access',
        'max_access',
        'meeting_date',
        'meeting_time',
        'duration',
        'parking',
        'no_of_parking',
        'parking_charge',
        'vat',
        'grand_total',
        'status',
        'finish_status',
        'cancel_status',
        'created_by',
        'updated_by',
        'is_active',
        'is_deleted',
        'deleted_at',
        'created_at',
    ];

    public function bookinsInfo()
    {
        return $this->belongsTo(Bookings::class,'booking_id','id');
    }

    public function customerDetails()
    {
        return $this->belongsTo(Customers::class,'customer_id','id');
    }

    public function workspaceUnitsDetails()
    {
        return $this->belongsTo(WorkspaceUnits::class,'workspace_unit_id','id')->with('locationSpace');
    }

}
