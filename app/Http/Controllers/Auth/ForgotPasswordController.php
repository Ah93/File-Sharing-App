<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Mail;
use Auth;
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    public function getEmail()
    {
       return view('auth.passwords.email');
    }

    public function postEmail(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('auth.passwords.verify',['token' => $token], function($message) use ($request) {
                  $message->from('email@example.com');
                  $message->to($request->email);
                  $message->subject('Reset Password Notification');
               });

               return redirect("forget-password")->with('success', 'We have e-mailed your password reset link!');
    }
}
