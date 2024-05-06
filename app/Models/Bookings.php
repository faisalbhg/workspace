<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $table='bookings';

    protected $fillable = [
        'customer_id',
        'booking_number',
        'booking_date',
        'booking_amount',
        'vat',
        'grand_total',
        'payment_id',
        'payment_type',
        'payment_request',
        'payment_response',
        'payment_status',
        'booking_status',
        'created_by',
        'updated_by',
        'is_active',
        'is_deleted',
        'deleted_at',
    ];
}
