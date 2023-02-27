<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

// use Spatie\Permission\Contracts\Role;

class RegisterController extends Controller
{

    public function register(RegisterRequest $request)
    {
        //Register user

        // $audit_permission,
        // $students_control,
        // $exam_control,
        // $result_control,
        // $teacther_control,
        // $doner_control,
        // $library_control,
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if (User::where('email', $request->email)->first()) {
            return response([
                'message' => 'Email already exists',
                'status' => 'failed'
            ], 200);
        }


        $user = User::Create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);


        $user_role = Role::where(['name' => 'user'])->first();

        if ($user_role) {
            $user->assignRole($user_role);
        }


        $permission = $request->permission;

        $user->givePermissionTo($permission);

        return response([
            'message' => 'User created successfully',
            'status' => 'success',
        ], 200);
    }
}