<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayFees extends Model
{
    use HasFactory;

    protected $fillable = [
        'ammount',
        'voucher_no',
        'comment',
        'student_id',
        'discount',
        'determined_fee'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}