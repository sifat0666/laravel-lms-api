<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubLedger extends Model
{
    use HasFactory;

    protected $fillable = [
        'chart_of_account',
        'fund',
        'general_ledger',
        'sub_ledger'
    ];
}