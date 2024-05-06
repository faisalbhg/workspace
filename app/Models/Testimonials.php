<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;

    protected $table='customer_testimonials';

    protected $fillable = [
        'name',
        'company_name',
        'address',
        'email',
        'phone',
        'message',
        'rating',
        'customer_id',
        'status',
        'is_email',
        'is_active',
        'is_delete',
        'deleted_at',
        'created_at',
    ];
}
