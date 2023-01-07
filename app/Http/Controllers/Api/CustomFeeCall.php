<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomFeeCall extends Controller
{
    public function fee(Request $request)
    {

        return DB::table('fees_determinations')->where('academic_year', $request->academic_year)->where('class_name', $request->class_name)->value($request->state);
    }
}