<?php

namespace App\Http\Controllers\Auth_2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Hash;
use Carbon\Carbon;
use App\User;
use App\OtpCode;
use App\Events\RegenerateOtpUserEvent;
use App\Events\RegisterUserEvent;
use App\Mail\RegisterOtpMail;
use Mail;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        request()->validate([
            'name'  => ['required','string'],
            'email' => ['email', 'required', 'string', 'unique:users,email'],
            'password' => ['required', 'min:8']
        ]);

        $user = User::create([
            'name'      => request('name'),
            'email'     => request('email'),
            'password'  => Hash::make(request('password'))
        ]);
        $data['user'] = $user;

        OtpCode::create([
            'otp'          => rand(1000,9999),
            'user_id'       => $user->id,
            'valid_until'   =>  now()->addMinutes(2)
            ]);

            event(new RegisterUserEvent($user));

            return response()->json([
            'response_code'     => "00",
            'response_message'  => "Silakan cek email anda untuk verif, kode otp hanya berlaku 2 jam !",
            'data'              => $data
        ]);
    }
}
