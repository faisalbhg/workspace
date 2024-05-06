<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $table='service_requests';

    protected $fillable = [
        'customer_id',
        'service_request_number',
        'service_type',
        'count',
        'price',
        'vat',
        'discount',
        'discount_amount',
        'discount_type',
        'discount_desc',
        'grand_total',
        'file',
        'message',
        'service_status',
        'is_active',
        'is_deleted',
        'created_by',
        'updated_by',
        'created_at',
    ];

    public function customerDetails()
    {
        return $this->belongsTo(Customers::class,'customer_id','id');
    }
}
