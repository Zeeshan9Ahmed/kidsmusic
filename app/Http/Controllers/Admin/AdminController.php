<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminUpdateProfileRequest;
use App\Models\Level;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function myaccount(AdminUpdateProfileRequest $request)
    {
        
        if ($request->method() == 'GET') {
            return view('admin.setting.index');
        } else if ($request->method() == 'POST') {
            $section = $request->update_section;
            switch ($section) {
                case  'update_profile_information':
            // auth()->user()->email = trim($request->input("email"));
            auth()->user()->name = trim($request->input("name"));
            if ($request->hasFile("profile_image")) {
                $avatar = uploadImage($request->file('profile_image'));
                auth()->user()->avatar = $avatar;
            }
                auth()->user()->save();
                return webcommonSuccessMessage("Profile Updated Successfully");
                break;
                
                case 'update_password_information':
                    if(password_verify($request->current_password , auth()->user()->password)){
                        auth()->user()->password = bcrypt($request->password);
                        auth()->user()->save();
                        return webcommonSuccessMessage("Password Changed Successfully");
                    }else{
                        return webcommonErrorMessage("Sorry Current password is Incorrect");
                    }
            }
        }
    }

    public function dashboard()
    {
        $total_levels = Level::count();
        $dashboard_data = [
            'total_users' => User::where('role','user')->count(),
            'total_musics' => $total_levels,
            'total_questions' => Question::count(),
            'total_levels' => $total_levels
        ];
        
        return webapiSuccessMessage("Dashboard Data", $dashboard_data);
    }
}
