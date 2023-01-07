<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamNameAndFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'class',
        'exam_name',
        'exam_namea',
        'fee',
        'session'
    ];
}