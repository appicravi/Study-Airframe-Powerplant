<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    // protected $connection = 'mongodb';
    // protected $collection = 'verifications';

    protected $fillable = ['username','otp','verify_at'];
}
