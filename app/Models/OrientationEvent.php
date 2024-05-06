<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrientationEvent extends Model
{
    use HasFactory;

    protected $table='orientation_events';

    protected $fillable = [
        'attend_status',
        'company_name',
        'office_no',
        'name_aof_attendee',
        'mobile_number',
        'email',
        'interested_to_join',
        'prepared_and_ready',
        'facing_any_challenges',
        'status',
        'is_active',
        'is_delete',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
}
