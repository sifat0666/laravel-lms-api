<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    protected $fillable = [
        'buying_price',
        'category',
        'class',
        'details',
        'image',
        'name',
        'price',
        'serial_no',
        'supplier',
        'unit',
    ];
}