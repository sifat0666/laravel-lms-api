<?php

use App\Http\Controllers\Api\AcademicYear;
use App\Http\Controllers\Api\Attendance;
use App\Http\Controllers\Api\Audit;
use App\Http\Controllers\Api\CustomQuerys;
use App\Http\Controllers\Api\DonerMember;
use App\Http\Controllers\Api\DonerMemberFee;
use App\Http\Controllers\Api\Employee;
use App\Http\Controllers\Api\FeesDetermination;
use App\Http\Controllers\Api\InstituteInfo;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\MarhalaClass;
use App\Http\Controllers\Api\PayFees;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ExamNameAndFee;
use App\Http\Controllers\Api\FeeName;
use App\Http\Controllers\Api\FoodFee;
use App\Http\Controllers\Api\Fund;
use App\Http\Controllers\Api\GeneralLedger;
use App\Http\Controllers\Api\Marks;
use App\Http\Controllers\Api\MonthlyFee;
use App\Http\Controllers\Api\Msg;
use App\Http\Controllers\Api\PaymentMethod;
use App\Http\Controllers\Api\Podobi;
use App\Http\Controllers\Api\SalleryPaymentSheet;
use App\Http\Controllers\Api\SallerySheet;
use App\Http\Controllers\Api\Subject;
use App\Http\Controllers\Api\SubLedger;
use App\Http\Controllers\Api\TeacherMonthEntry;
use App\Http\Controllers\Book;
use App\Http\Controllers\DivisionEntry;
use App\Http\Controllers\MonthName;
use App\Http\Controllers\PassMarks;
use App\Http\Controllers\PasswordResetController;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//User Routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return [
        'name' => $request->user()->name,
        'email' => $request->user()->email,
        'id' => $request->user()->id,
        'roles' => $request->user()->roles[0],
        'permissions' => $request->user()->permissions->pluck('name'),
    ];
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [LogoutController::class, 'logout']);
    Route::apiResource('student', StudentController::class);

    Route::post('update-username', function (Request $request) {
        $user = User::where('id', $request->user()->id)->first();

        $user->name = $request->name;
        $user->save();
        return $user;
    });

    Route::post('change-password', [PasswordResetController::class, 'change_password']);


});
Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);

Route::post('/send-password-reset-email', [PasswordResetController::class, 'set_reset_password_email']);
Route::post('/reset-password/{token}', [PasswordResetController::class, 'reset_password']);
Route::apiResource('users', UserController::class);
Route::apiResource('fund', Fund::class);
Route::apiResource('general-ledger', GeneralLedger::class);
Route::apiResource('sub-ledger', SubLedger::class);
Route::apiResource('payment-method', PaymentMethod::class);
Route::apiResource('audit', Audit::class);
Route::apiResource('fee-name', FeeName::class);
Route::apiResource('monthly-fee', MonthlyFee::class);
Route::apiResource('subject', Subject::class);
Route::apiResource('msg', Msg::class);
Route::apiResource('doner-member', DonerMember::class);
Route::apiResource('book', Book::class);
Route::apiResource('podobi', Podobi::class);
Route::apiResource('teacher-month-entry', TeacherMonthEntry::class);
Route::apiResource('monthly-sallery-entry', SalleryPaymentSheet::class);


//Custom
Route::post('customfeecall', [CustomQuerys::class, 'fee']);
Route::post('custom-student-call', [CustomQuerys::class, 'filterStudent']);
Route::post('custom-fund-call', [CustomQuerys::class, 'filterFund']);
Route::post('custom-ledger-call', [CustomQuerys::class, 'filterLedger']);
Route::post('monthly-fee-report', [CustomQuerys::class, 'filterMonthlyFee']);
Route::post('food-fee-report', [CustomQuerys::class, 'filterFoodFee']);
Route::post('result', [CustomQuerys::class, 'result']);
Route::post('result', [CustomQuerys::class, 'result']);
Route::post('filter-student-by-fee', [CustomQuerys::class, 'filterStudentByFee']);
Route::post('filter-student-by-class', [CustomQuerys::class, 'filterStudentByclass']);
Route::post('filter-subject-by-class', [CustomQuerys::class, 'filterSubjectByClass']);
Route::post('student-servey', [CustomQuerys::class, 'studentSurvey']);
Route::post('filter-result-per-class', [CustomQuerys::class, 'filterResultPerClass']);
Route::get('dashboard', [CustomQuerys::class, 'dashboard']);
Route::get('employee-payroll-null', [CustomQuerys::class, 'employee_payroll_null']);
Route::post('payroll-filter', [CustomQuerys::class, 'employeePayrollFilteredBySessionAndMonth']);
Route::post('employee-payroll-queue', [CustomQuerys::class, 'employee_payroll_queue']);
Route::post('doner-fee', [CustomQuerys::class, 'DonerFeeFilteredBySessionAndMonth']);
Route::post('moukuf-student', [CustomQuerys::class, 'filterMoukufStudent']);
Route::post('mash-hishebe-mashik-fee', [CustomQuerys::class, 'MashHishebeMashikFee']);
Route::post('mash-hishebe-mashik-fee-bokeya', [CustomQuerys::class, 'MashHishebeMashikFeeBokeya']);

//



//filterMoukufStudent




//employee_payroll_queue


// Route::get('abc', [
//     CustomQuerys::class,
//     'filterByAdmissionFee'doe
// ]);



//Student Routes
Route::apiResource('exam-entry', ExamNameAndFee::class);
Route::apiResource('pass-mark', PassMarks::class);
Route::apiResource('division-entry', DivisionEntry::class);
Route::apiResource('pay-fees', PayFees::class);
Route::apiResource('institute-info', InstituteInfo::class);
Route::apiResource('academicyear', AcademicYear::class);
Route::apiResource('marhalaclass', MarhalaClass::class);
Route::apiResource('fees-determination', FeesDetermination::class);
Route::apiResource('marks', Marks::class);
Route::apiResource('attendance', Attendance::class);
Route::apiResource('month-entry', MonthName::class);
Route::apiResource('food-fee', FoodFee::class);
Route::apiResource('employee', Employee::class);
Route::apiResource('sallery-sheet', SallerySheet::class);
Route::apiResource('doner-member-fee', DonerMemberFee::class);




Route::post('update-student', function (Request $request) {
    $student = Student::find($request->id);

    $student->class = $request->class;
    $student->save();
    return $student;
});