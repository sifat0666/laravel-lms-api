<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesDetermination extends Model
{
    use HasFactory;

    protected $fillable = [
        'academic_year',
        'boy_resi_new',
        'boy_resi_old',
        'boy_unresi_new',
        'boy_unresi_old',
        'class_name',
        'fee_name',
        'fee_type',
        'girl_resi_new',
        'girl_resi_old',
        'girl_unresi_new',
        'girl_unresi_old'
    ];
}