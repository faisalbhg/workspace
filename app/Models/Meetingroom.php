<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meetingroom extends Model
{
    use HasFactory;

    protected $table='meetingrooms';

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'company',
        'office_no',
        'number_of_guest',
        'meeting_room',
        'meting_date',
        'start_time',
        'end_time',
        'duration',
        'status',
        'cancel_status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}
