<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteInfo extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'namea', 'address', 'addressa', 'num', 'numa', 'graam', 'graama', 'daak', 'daaka', 'thana', 'thanaa', "jela", 'jelaa', 'ilhak', 'ilhaka'];
}