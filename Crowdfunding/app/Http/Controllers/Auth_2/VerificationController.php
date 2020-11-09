<?php

namespace App\Http\Controllers\Auth_2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\OtpCode;
use Carbon\Carbon;

class VerificationController extends Controller
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
            'otp' => ['string', 'required'],
        ]);
        $otp_code = OtpCode::where('otp',request('otp'))->first();

        if(!$otp_code){
            return response()->json([
                'response_code'=> '01',
                'response_message' => 'OTP COde Not Found',
            ],200);
        }

        $current = Carbon::now();
        if($current > $otp_code->valid_until){
            return response()->json([
                'response_code'=> '01',
                'response_message' => 'OTP is Expired, Please regenerate you OTP Code',
            ],200);
        }

        $user = User::find($otp_code->user_id);
        $user->email_verified_at = Carbon::now();
        $user->save();

        $otp_code->delete();
        $data['user'] = $user;

        return response()->json([
            'response_code'=> '00',
            'response_message' => 'Success verification',
            'data' => $data,
        ],200);
    }
}
