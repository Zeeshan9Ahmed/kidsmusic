<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Genere\SaveGenereRequest;
use App\Http\Requests\Admin\Genere\UpdateGenereRequest;
use App\Models\Genere;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use  Yajra\DataTables\Facades\DataTables;
class GenereController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $generes = Genere::all();
            return DataTables::of($generes)
            ->addColumn('action', function ($generes) {
                $edit_url = route('admin.genere.edit',[$generes->id]);
                $content = "";
                $content = '<a href="#" class=" btn-primary btn-sm upd-category" data-id="'.$generes->id.'" data-url="'.$edit_url.'" title="Edit Genere"><i class="fa fa-pencil-alt"></i></a> ';
                
               
                return $content;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
           
        }
        return view('admin.genere.index');
    }

    public function store(SaveGenereRequest $request)
    {
        $arr = [
            'name' => $request->name
        ];
        Genere::create($arr);
        $users = User::where(['is_verified' =>  '1', 'role' => 'user'])->get();
        foreach($users as $user){
            $arr = [
                'sender_id' => 0,
                'reciever_id' => $user->id,
                'title' => 'level Created',
                'description' => 'A new Genere has been created',
                'type' => 'genere_create',
                'record_id' => 1,
                'seen' => '0',
                'is_admin' => '1'
            ];
            Notification::create($arr);
        }
        return webcommonSuccessMessage("Genere Created Successfully");
    }
    

    public function edit($id)
    {
        $genere = Genere::find($id);
        
        if(! empty($genere)){
            return webapiSuccessMessage('Genere Found', $genere);
        }else{
            return webcommonErrorMessage("Genere Not Found");
        }
    }

    public function update(UpdateGenereRequest $request)
    {
        $genere = Genere::find($request->id);
        if(! empty($genere)){
            $genere->name = $request->name;
            $genere->save();
            return webcommonSuccessMessage("Genere Updated Successfully");
        }else{
            return webcommonErrorMessage("Genere Not Found");
        }
    }
}
