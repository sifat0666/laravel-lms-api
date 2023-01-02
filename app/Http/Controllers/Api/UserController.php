<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
// use App\Http\Resources\UserResource;
// use App\Http\Resources\UsersResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::orderBy('created_at', 'desc')->paginate(5));
    }

    public function show(User $user)
    {
        return new UserResource($user);

    }

    public function destroy(User $user)
    {
        return $user->delete();
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return new UserResource($user);
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['success' => true, 'msg' => 'user logged out']);
    }

}