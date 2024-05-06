<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BussinessCenterClients extends Model
{
    use HasFactory;

    protected $table='bussiness_center_clients';

    protected $fillable = [
        'company_name',
        'contact_phone',
        'contact_mobile',
        'contact_email',
        'floor',
        'unit_no',
        'office_start_date',
        'is_active',
        'is_deleted',
        'created_by',
        'updated_by',
        'created_at',
    ];
}
