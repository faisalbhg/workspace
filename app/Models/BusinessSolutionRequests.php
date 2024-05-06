<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSolutionRequests extends Model
{
    use HasFactory;

    protected $table='business_solution_requests';

    protected $fillable = [
        'name',
        'service_name',
        'company_name',
        'location',
        'address',
        'email',
        'phone',
        'message',
        'status',
        'is_email',
        'is_active',
        'is_delete',
        'deleted_at',
        'created_at',
    ];
}
