<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinballRegistrationQuestion extends Model
{
    use HasFactory;

    protected $table='pinball_registration_questions';
    
    protected $fillable = [
        'question',
        'answer',
        'participants',
        'created_at',
    ];

    public function participant()
    {
        return $this->belongsTo(PinballRegistration::class,'participants','id');
    }
}
