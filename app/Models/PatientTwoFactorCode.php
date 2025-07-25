<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientTwoFactorCode extends Model
{
    protected $fillable = [
        'patient_id', 'code', 'expires_at'
    ];
    public $timestamps = false;
}
