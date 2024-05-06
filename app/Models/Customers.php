<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customers extends Authenticatable
{
    use HasFactory;

    protected $table='customers';

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'mobile',
        'password',
        'customer_id_image',
        'reset_hash',
        'reset_expires',
        'usertype',
        'created_by',
        'updated_by',
        'is_active',
        'is_blocked',
        'created_at',
    ];
}
