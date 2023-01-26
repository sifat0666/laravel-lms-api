<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [

        'session',
        'class',
        'notun_puraton',
        'student_id',
        'roll',
        'gender',
        'form_number',
        'abashik_onabashik',
        'student_name',
        'father_name',
        'mother_name',
        'dob',
        'nid_no',
        'nationality',
        'blood_group',
        'phn_no',
        'perm_graam',
        'perm_daak',
        'perm_thana',
        'perm_jela',
        'graam',
        'daak',
        'thana',
        'jela',
        'comment',
        'image',
        'khabar_fee_dibe',
        'mashik_fee_dibe',
        'vorti_fee_dibe'
    ];

    public function payFees()
    {
        return $this->hasOne(PayFees::class);
    }


}