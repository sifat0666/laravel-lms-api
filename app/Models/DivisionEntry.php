<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'case1',
        'case1_div',
        'case1_div_a',
        'case2',
        'case2_div',
        'case2_div_a',
        'case3',
        'case3_div',
        'case3_div_a',
        'case4',
        'case4_div',
        'case4_div_a',
        'case5',
        'case5_div',
        'case5_div_a',
        'case6',
        'case6_div',
        'case6_div_a',
        'class',
        'highest_mark',
        'note',
        'session',
        'exam_name'
    ];

}