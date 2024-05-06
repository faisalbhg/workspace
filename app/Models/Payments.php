<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $table='payments';

    protected $fillable = [
        'customer_id',
        'payment_name_on_card',
        'payment_card_number',
        'payment_exp_month',
        'payment_exp_year',
        'default_card',
        'save_as_future_use',
        'created_by',
        'updated_by',
        'is_active',
        'is_blocked',
        'deleted_at',
        'created_at',
    ];
}
