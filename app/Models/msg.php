<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class msg extends Model
{
    use HasFactory;

    protected $fillable = [
        'absent',
        'escaped',
        'khabar',
        'mashik',
        'present',
        'vorti',
        'absent_msg',
        'escaped_msg',
        'khabar_msg',
        'mashik_msg',
        'present_msg',
        'vorti_msg'
    ];
}