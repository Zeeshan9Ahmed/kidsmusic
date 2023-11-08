<?php
namespace App\Services\User;
use App\Contracts\OtpVerificationInterface;
use App\Models\User;

class OtpVerificationService implements OtpVerificationInterface {
    public function verify($request){
        $user = User::where(['id' => $request->id, 'verification_code' => $request->verification_code])->first();
        // return $user;
        if(empty($user)){
            return commonErrorMessage("Sorry, No User found", 400);
        }else{
                $user->is_verified = '1';
                $user->verification_code = null;
                $user->save();
                $token = $user->createToken('AuthToken')->plainTextToken;
                $data = [$user,$token];
                return apiSuccessMessage('Verification Completed', $data[0], $data[1]);
                // return $data;
        }
    }
    
    public function resendCode($request){
        $user = User::find($request->id);
        if(empty($user)){
            return commonErrorMessage("No User Found", 400);
        }else{
            
                $user->verification_code = 123456;
                $user->save();
                // here mail will be send 
                return commonSuccessMessage("Verification Code Resend Successfully, please visit your email",200);
        }
    }
}