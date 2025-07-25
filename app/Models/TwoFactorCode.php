<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TwoFactorCode extends Model
{
    protected $fillable = [
        'user_id', 'code', 'expires_at'
    ];
    public $timestamps = false;
}
