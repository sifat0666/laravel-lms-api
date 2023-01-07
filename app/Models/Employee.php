<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'daak',
        'data_of_joining',
        'employee_id',
        'exp',
        'father_name',
        'graam',
        'jela',
        'mother_name',
        'passing_district',
        'passing_year',
        'position',
        'qualification',
        'reg_no',
        'thana',
        'type'
    ];
}