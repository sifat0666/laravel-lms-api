<?php


use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\UserController;
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