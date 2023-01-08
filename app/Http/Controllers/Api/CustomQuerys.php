<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomQuerys extends Controller
{
    public function filterStudent(Request $request)
    {
        return DB::table('students')->where('session', $request->session)->where('class', $request->class)->get();
    }
}