<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genere;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use  Yajra\DataTables\Facades\DataTables;
class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $users = User::where('role' ,'user')->get();
            return DataTables::of($users)
            ->addColumn('avatar', function($users){
                if(is_null($users->avatar)){
                    return '<img src="'.getDummyImageUrl().'" class="direct-chat-img" >';
                }else{
                    return '<img src="'.$users->avatar.'" class="direct-chat-img" >';
                }
            })
            
            ->addColumn('action', function ($users) {
                $urlAction = url('admin/user/'.$users->id);
                $content = '<a href="' . $urlAction . '" class=" btn-sm btn-primary" title="View Details"><i class="fa fa-eye"></i></a>';
                return $content;
            })
            ->rawColumns(['action','avatar','is_active'])
            ->addIndexColumn()
            ->make(true);
           
        }
        return view('admin.users.index');
    }

    public function subAdmin(Request $request)
    {
        if($request->ajax()){
            $users = User::where('role','admin')->where('id','!=' ,auth()->id())->get();
            return DataTables::of($users)
            ->addColumn('avatar', function($users){
                if(is_null($users->avatar)){
                    return '<img src="'.getDummyImageUrl().'" class="direct-chat-img" >';
                }else{
                    return '<img src="'.$users->avatar.'" class="direct-chat-img" >';
                }
            })
            ->addColumn('action', function ($users) {
                $edit_url = route('admin.sub_admin.edit',[$users->id]);
                $content = "";
                $content = '<a href="#" class=" btn-primary btn-sm upd-category" data-id="'.$users->id.'" data-url="'.$edit_url.'" title="Edit User"><i class="fa fa-pencil-alt"></i></a> ';
                return $content;
            })    
            ->rawColumns(['action','avatar','is_active'])
            ->addIndexColumn()
            ->make(true);
           
        }
        
        
        return view('admin.users.sub_admin');
    }

    public function store(Request $request)
    {
        $arr = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'admin'
        ];
        $user = User::create($arr);
        return webcommonSuccessMessage("User Created Successfully");

    }

    public function show($id)
    {
        $user_detail = Genere::with(['levels.user_level_score' => function ($query) use($id){
            return $query->where('user_id', $id);
        }])->get();
        $user = User::find($id);
        return view('admin.users.user-details', compact('user_detail','user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        
        if(! empty($user)){
            return webapiSuccessMessage('User Found', $user);
        }else{
            return webcommonErrorMessage("User Not Found");
        }
    }

    public function delete($id)
    {
        User::destroy($id);
        return webapiSuccessMessage("User Deleted Successfully");
    }
}
