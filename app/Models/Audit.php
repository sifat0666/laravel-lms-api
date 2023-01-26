<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_name',
        'ammount',
        'book',
        'chart_of_account',
        'comment',
        'fund_name',
        'general_ledger',
        'particulars_detail',
        'payment_system',
        'sub_ledger',
        'submit_date',
        'submit_date_arabic',
        'voucher_slip'
    ];
}