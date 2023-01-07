<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassMarks extends Model
{
    use HasFactory;

    protected $fillable = [
        'book',
        'class',
        'exam_name',
        'pass_mark',
        'session',
        'subject_a'
    ];

}