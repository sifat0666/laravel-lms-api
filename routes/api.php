<?php

use App\Http\Controllers\Api\AcademicYear;
use App\Http\Controllers\Api\CustomFeeCall;
use App\Http\Controllers\Api\CustomQuerys;
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
use App\Http\Controllers\DivisionEntry;
use App\Http\Controllers\PassMarks;
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
        // 'permissions' => $request->user()->permissions,
        'permissions' => $request->user()->permissions->pluck('name'),
        // 'password' => Hash::make($request->password),
    ];
});
Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);
Route::get('logout', [LogoutController::class, 'logout']);
Route::apiResource('users', UserController::class);


//Custom
Route::post('customfeecall', [CustomFeeCall::class, 'fee']);
Route::post('custom-student-call', [CustomQuerys::class, 'filterStudent']);


//Student Routes
Route::apiResource('student', StudentController::class);
Route::apiResource('exam-entry', ExamNameAndFee::class);
Route::apiResource('pass-mark', PassMarks::class);
Route::apiResource('division-entry', DivisionEntry::class);
Route::apiResource('pay-fees', PayFees::class);
Route::apiResource('institute-info', InstituteInfo::class);
Route::apiResource('academicyear', AcademicYear::class);
Route::apiResource('marhalaclass', MarhalaClass::class);
Route::apiResource('fees-determination', FeesDetermination::class);