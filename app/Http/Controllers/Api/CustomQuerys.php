<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CustomQuerys extends Controller
{
    public function filterStudent(Request $request)
    {
        return DB::table('students')->where('session', $request->session)->where('class', $request->class)->get();
    }

    public function filterMoukufStudent(Request $request)
    {


        $khabarFeeDibe = DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->where('khabar_fee_dibe', 0)
            ->get();
        $mashikFeeDibe = DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->where('mashik_fee_dibe', 0)
            ->get();
        $vortiFeeDibe = DB::table('students')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->where('vorti_fee_dibe', 0)
            ->get();


        return ['khabarFee' => $khabarFeeDibe, 'mashikFee' => $mashikFeeDibe, 'vortiFee' => $vortiFeeDibe];

    }


    public function DonerFeeFilteredBySessionAndMonth(Request $request)
    {
        return DB::table('doner_member_fees')
            ->where('session', $request->session)
            ->where('month', $request->month)
            ->get();
    }


    public function employeePayrollFilteredBySessionAndMonth(Request $request)
    {


        return DB::table('sallery_payment_sheets')
            ->where('session', $request->session)
            ->where('month', $request->month)
            ->get();
    }

    public function beton_deyni(Request $request)
    {

        // $x = DB::table('sallery_payment_sheets')
        //     ->where('session', $request->session)
        //     ->where('month', $request->month)
        //     ->get();

        $students = DB::table('students')
            ->select(
                'students.name',
                'sallery_sheets.podobi',
                'sallery_sheets.employee_id',
                'sallery_sheets.total'

            )
            ->leftJoin('sallery_payment_sheets', 'sallery_payment_sheets.employee_id', '=', 'sallery_sheets.employee_id')
            ->whereNull('sallery_payment_sheets.employee_id')
                // ->where('session', '!=', $request->session)
                // ->where('month', '!=', $request->month)
            ->get();

        $month = $request->input('month');
        $session = $request->input('session');


        $students = DB::select("
        SELECT sallery_sheets.name, sallery_sheets.podobi, sallery_sheets.employee_id, sallery_sheets.total
        FROM sallery_sheets
        LEFT JOIN sallery_payment_sheets
        ON sallery_payment_sheets.employee_id = sallery_sheets.employee_id
        AND sallery_payment_sheets.month = :month
        AND sallery_payment_sheets.session = :session
        WHERE sallery_payment_sheets.employee_id IS NULL
    ", ['month' => $month, 'session' => $session]);


        // return ModelsEmployee::orderBy('created_at', 'desc')->paginate(1000);
        return $students;
    }



    public function employee_payroll_queue(Request $request)
    {

        // $x = DB::table('sallery_payment_sheets')
        //     ->where('session', $request->session)
        //     ->where('month', $request->month)
        //     ->get();

        // $students = DB::table('sallery_sheets')
        //     ->select(
        //         'sallery_sheets.name',
        //         'sallery_sheets.podobi',
        //         'sallery_sheets.employee_id',
        //         'sallery_sheets.total'

        //     )
        //     ->leftJoin('sallery_payment_sheets', 'sallery_payment_sheets.employee_id', '=', 'sallery_sheets.employee_id')
        //     ->whereNull('sallery_payment_sheets.employee_id')
        //     // ->where('session', '!=', $request->session)
        //     // ->where('month', '!=', $request->month)
        //     ->get();

        $month = $request->input('month');
        $session = $request->input('session');


        $students = DB::select("
        SELECT sallery_sheets.name, sallery_sheets.podobi, sallery_sheets.employee_id, sallery_sheets.total
        FROM sallery_sheets
        LEFT JOIN sallery_payment_sheets
        ON sallery_payment_sheets.employee_id = sallery_sheets.employee_id
        AND sallery_payment_sheets.month = :month
        AND sallery_payment_sheets.session = :session
        WHERE sallery_payment_sheets.employee_id IS NULL
    ", ['month' => $month, 'session' => $session]);


        // return ModelsEmployee::orderBy('created_at', 'desc')->paginate(1000);
        return $students;
    }




    public function employee_payroll_null(Request $request)
    {
        $students = DB::table('employees')
            ->select(
                'employees.id',
                'employees.employee_id',
                'employees.position'

            )
            ->leftJoin('sallery_sheets', 'sallery_sheets.employee_id', '=', 'employees.id')
            ->whereNull('sallery_sheets.employee_id')
                // ->orWhere('enrollments.academic_id', '<>', $current_academic->id)
            ->get();

        // return ModelsEmployee::orderBy('created_at', 'desc')->paginate(1000);
        return $students;
    }



    public function filterFund(Request $request)
    {
        return DB::table('audits')->where('fund_name', $request->fund_name)->where('chart_of_account', $request->chart_of_account)->get();
    }
    public function filterLedger(Request $request)
    {
        return DB::table('audits')->where('general_ledger', $request->general_ledger)->where('sub_ledger', $request->sub_ledger)->get();
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
    public function filterResultPerClass(Request $request)
    {
        return DB::table('marks')
            ->where('session', $request->session)
            ->where('class', $request->class)
            ->where('exam', $request->exam)
            ->get();
        // return 'asdf';
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

    public function dashboard()
    {
        $totalUser = DB::table('users')->count();
        $totalStudent = DB::table('students')->count();
        $totalClass = DB::table('marhala_classes')->count();

        $attandance = DB::table('attendances')->value('created_at');
        $now = Carbon::now();

        // return substr($now, 0, 10);

        // return $attandance;
        // 
        return ['total_user' => $totalUser, 'total_student' => $totalStudent, 'total_class' => $totalClass];
    }
}