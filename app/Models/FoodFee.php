<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'fee',
        'month',
        'session',
        'student_id',
        'receiver',
        'class'
    ];
}