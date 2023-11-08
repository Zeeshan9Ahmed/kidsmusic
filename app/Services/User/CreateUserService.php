<?php
namespace App\Services\User;
use App\Contracts\CreateUserInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CreateUserService implements CreateUserInterface {
    public function save($request){
        //mt_rand(100000,900000)
        $avatar = null;
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploadedimages'), $imageName);
            $avatar = asset('uploadedimages')."/".$imageName;
        }
        // return $avatar;
        $arr = [
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $avatar,
            'password' => bcrypt($request->password),
            'device_type' => $request->device_type,
            'device_token' => $request->device_token,
            'is_forgot' => "0",
            'is_verified' => "0",
            'verification_code' => 123456,
            'is_blocked' => "0"
        ];
        // return $arr;
        $data = ['id' => User::create($arr)->id];
        return apiSuccessMessage("User Created Successfully" ,$data);
    }  
    
    public function completeProfile($request){
        $user = Auth::user();

            $user->name = $request->name;
            if($request->hasFile('image')){
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploadedimages'), $imageName);
                $user->avatar=asset('uploadedimages')."/".$imageName;
            }
            $user->is_profile_complete = "1";
            if($user->save()){
                return apiSuccessMessage("User Profile Completed Successfully", $user);
            }else{
                return commonErrorMessage("Something went Wrong While updating the data", 400);
            }
        
    }
    
}