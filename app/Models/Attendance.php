<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'attandance',
        'class',
        'date',
        'name',
        'roll',
        'session',
        'student_id'
    ];
}