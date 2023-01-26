<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomQuerys extends Controller
{
    public function filterStudent(Request $request)
    {
        return DB::table('students')->where('session', $request->session)->where('class', $request->class)->get();
    }

    public function filterByAdmissionFee()
    {
        // return Student::doesnthave('pay_fees')->get();

        $feeData = DB::table('pay_fees')->get();
        $student = DB::table('students')->get();
    }

    public function filterMonthlyFee(Request $request)
    {
        return DB::table('monthly_fees')->where('session', $request->session)->where('class', $request->class)->where('month', $request->month)->get();
    }
    public function filterFoodFee(Request $request)
    {
        $users = DB::table('students')
            ->join('monthly_fees', 'students.id', '=', 'monthly_fees.student_id')
                // ->join('monthly_fees', 'student.id', '=', 'orders.user_id')
                // ->select('students.*', 'monthly_fees.discount', 'monthly_fees.submitted_fee', 'monthly_fees.determined_fee', 'monthly_fees.fee_name', 'monthly_fees.month')
                // ->where('session', $request->session)
                // ->where('class', $request->class)



            ->get();

        $users2 = DB::table('students')
            ->leftJoin('monthly_fees', 'students.id', '=', 'monthly_fees.student_id')
            ->get();


        // $users2 = DB::table('students')
        //     ->join('students', 'monthly_fees.student_id', '=', 'students.id')
        //     // ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('monthly_fees.*', 'students.class', 'students.session', 'students.student_name')
        //         // ->where('session', $request->session)
        //         // ->where('class', $request->class)
        //     ->get();
        // return DB::table('student')->where('session', $request->session)->where('class', $request->class)->where('month', $request->month)->get();

        // return DB::table('monthly_fees')->get();

        return $users2;

    }


    public function fee(Request $request)
    {
        return DB::table('fees_determinations')->where('academic_year', $request->academic_year)->where('class_name', $request->class_name)->where('fee_name', $request->fee_name)->value($request->state);
    }

    public function filterStudentByFee(Request $request)
    {
        return DB::table('monthly_fees')->where('student_id', $request->student_id)->get();
    }

    public function filterStudentByclass(Request $request)
    {
        return DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->get();

    }

    public function studentSurvey(Request $request)
    {
        $total = DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->count();

        $boy = DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->where('gender', 'boy')

            ->count();

        $girl = DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->where('gender', 'girl')

            ->count();

        $new = DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->where('notun_puraton', 'new')
            ->count();

        $old = DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->where('notun_puraton', 'old')

            ->count();

        $resi = DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->where('abashik_onabashik', 'resi')
            ->count();

        $unresi = DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->where('abashik_onabashik', 'unresi')

            ->count();

        return ['total' => $total, 'boy' => $boy, 'unresi' => $unresi, 'resi' => $resi, 'girl' => $girl, 'new' => $new, 'old' => $old];

    }

    public function filterSubjectByClass(Request $request)
    {
        return DB::table('subjects')
            // ->where('session', $request->session)
            ->where('class', $request->class)
            ->get();

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