<?php

namespace App\Http\Controllers;

use App\Models\PasswordReset;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Message;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;


class PasswordResetController extends Controller
{
    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string|min:6',
            'password' => 'required|string|min:6'
        ]);

        $user = User::where('id', $request->user()->id)->first();

        if ($user && Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();

            return response([
                'message' => 'Successfully changed password',
                'status' => 'success'
            ], 200);
        }

        return response([
            'message' => 'Invalid password',
            'status' => 'failed'
        ], 400);
    }

    public function set_reset_password_email(Request $request)
    {

        $request->validate([
            'email' => 'required',
        ]);
        $email = $request->email;

        // Check User's Email Exists or Not
        $user = User::where('email', $email)->first();
        if (!$user) {
            return response([
                'message' => 'Email doesnt exists',
                'status' => 'failed'
            ], 404);
        }

        // Generate Token
        $token = Str::random(60);

        // Saving Data to Password Reset Table
        PasswordReset::create([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Sending EMail with Password Reset View
        Mail::send('reset', ['token' => $token], function (Message $message) use ($email) {
            $message->subject('Reset Your Password');
            $message->to($email);
        });
        return response([
            'message' => 'Password Reset Email Sent... Check Your Email',
            'status' => 'success'
        ], 200);

        // return 'paswordreset email';

    }


    public function reset_password(Request $request, $token)
    {

        //delete tokain generated loger than 2 min ago
        $formatted = Carbon::now()->subMinutes(2)->toDateTimeString();
        PasswordReset::where('created_at', '<=', $formatted)->delete();

        $request->validate([
            'password' => 'required'
        ]);

        $passwordreset = PasswordReset::where('token', $token)->first();

        if (!$passwordreset) {
            return response([
                'message' => 'Token doesnt exists',
                'status' => 'failed'
            ], 404);
        }

        $user = User::where('email', $passwordreset->email)->first();

        $user->password = Hash::make($request->password);
        $user->save();

        //delete password after reseting
        PasswordReset::where('token', $token)->delete();

        return response([
            'message' => 'Password Reset Success',
            'status' => 'success'
        ], 200);

        // return 'password reset';
    }
}