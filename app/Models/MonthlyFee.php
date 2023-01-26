<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'class',
        'determined_fee',
        'discount',
        'fee_name',
        'month',
        'order_no',
        'receiver',
        'student_id',
        'student_name',
        'submitted_fee',
        'submit_date'
    ];
}