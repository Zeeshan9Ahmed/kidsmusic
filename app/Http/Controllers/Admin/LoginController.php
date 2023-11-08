<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm(){
        if(! Auth::check()){
            return view('auth.login');
        }else{
            
            return redirect(url('admin/dashboard'));
        }
    }

    public function login(LoginRequest $request){
        $credentials = request(['email','password']);
        $credentials['role'] = 'admin';
    
        if(! Auth::attempt($credentials)){
            return webcommonErrorMessage('Sorry Invalid Email or Password');
        }else{
            
            $redirect = url("admin/dashboard");
            $user = Auth::user();
                return webcommonSuccessMessage ('Admin Login successfully!', false, $redirect);
        }

    }
    public function logout(){
        
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('login');
        }
        return redirect()->route('login');

    }
}
