<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SallerySheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'bari_vara',
        'chikitsha',
        'employee_id',
        'mul_beton',
        'name',
        'otiriktoBeton',
        'podobi',
        'total',
    ];
}