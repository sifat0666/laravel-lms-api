<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'buying_price',
        'class',
        'date',
        'name',
        'price',
        'selling_price',
        'total',
        'submitted_by',
        'qty',
    ];
}