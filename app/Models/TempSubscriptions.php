<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempSubscriptions extends Model
{
    use HasFactory;

    protected $table='temp_subscriptions';

    protected $fillable = [
        'user_id',
        'workspace_unit_id',
        'session',
        'package_id',
        'package_name',
        'credits',
        'package_price',
        'package_category',
        'min_access',
        'max_access',
        'meeting_date',
        'meeting_time',
        'duration',
        'parking',
        'no_of_parking',
        'parking_charge',
        'total_price',
        'vat',
        'grand_total',
        'created_by',
        'created_at',
    ];
}
