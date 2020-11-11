<?php

namespace App\Http\Controllers\Auth_2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\OtpCode;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Events\RegisterUserEvent;

class RegenerateOtpController extends Controller
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
            'email' => ['email', 'required']
        ]);


        $user = User::where('email' , request('email'))->first();
        $otp_code = OtpCode::where('user_id',$user->id);
        $otp_code->delete();

        $current = Carbon::now();
        $otpExpires = $current->addMinutes(20);
        OtpCode::create([
            'otp'          => rand(1000,9999),
            'user_id'       => $user->id,
            'valid_until'   =>  now()->addHours(2)
        ]);
        event(new RegisterUserEvent($user));
        return response()->json([
            'response_code' => "00",
            'response_message' => 'silahkan cek email',
            'data' => $user
        ]);
    }
}
