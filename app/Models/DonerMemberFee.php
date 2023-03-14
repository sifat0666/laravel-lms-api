<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonerMemberFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'doner_id',
        'fee',
        'korton',
        'month',
        'name',
        'nirdharito_fee',
        'session',
    ];
}