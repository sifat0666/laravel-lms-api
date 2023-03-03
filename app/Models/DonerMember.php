<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonerMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'copil',
        'daak',
        'daak_perm',
        'date',
        'father_name',
        'fee',
        'graam',
        'graam_perm',
        'image',
        'jela',
        'jela_perm',
        'mother_name',
        'name',
        'occupation',
        'thana',
        'thana_perm',
        'duration',
        'type',
        'nid_image',
        'nid_no'
    ];
}