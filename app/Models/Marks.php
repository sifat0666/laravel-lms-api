<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;

    protected $fillable = [
        'class',
        'exam',
        'number',
        'session',
        'student_id',
        'subject',
        'pass_number',
        'highest_number'
    ];
}