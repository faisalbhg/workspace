<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinballRegistration extends Model
{
    use HasFactory;

    protected $table='pinball_registrations';

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'company',
        'address',
        'qtn1',
        'qtn2',
        'qtn3',
        'category',
        'status',
        'is_active',
        'is_delete',
        'deleted_at',
        'created_at',
    ];

    public function questions()
    {
        return $this->hasMany(PinballRegistrationQuestion::class,'participants','id');
    }
}
