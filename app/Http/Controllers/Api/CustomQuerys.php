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

    public function fee(Request $request)
    {

        return DB::table('fees_determinations')->where('academic_year', $request->academic_year)->where('class_name', $request->class_name)->value($request->state);
    }

    public function result(Request $request)
    {
        return DB::table('marks')
            ->where('session', $request->session)
            ->where('student_id', $request->student_id)
            ->where('exam', $request->exam)
            ->where('class', $request->class)
                // ->lists('subject', 'number');
            ->get();
    }
}