<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessHubs extends Model
{
    use HasFactory;

    protected $table='business_hubs';

    protected $fillable = [
        'name',
        'company_logo',
        'location',
        'address',
        'email',
        'phone',
        'service',
        'status',
        'is_active',
        'is_deleted',
        'deleted_at',
        'updated_by',
        'created_at',
    ];
}
