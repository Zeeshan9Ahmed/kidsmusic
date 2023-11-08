<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Genere;
use App\Models\Level;
use App\Models\Notification;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use  Yajra\DataTables\Facades\DataTables;
class LevelController extends Controller
{
    public function index()
    {
        $generes = Genere::all();
        
       return view('admin.levels.add-level',compact(['generes']));

    }

    public function store(Request $request)
    {
        
        $genere_id = $request->genere;
        $level_data = [
            'genere_id' => $genere_id,
        ];
        if($request->hasFile('music')){
            $musicName = time().'.'.$request->music->getClientOriginalExtension();
            $request->music->move(public_path('/uploadedmusics'), $musicName);
            $level_data['music'] = asset('uploadedmusics')."/".$musicName;
            
        }
        $level_id = Level::create($level_data)->id;
        
        foreach($request->question as $key => $ques){

            $arr =[
                'level_id' => $level_id,
                'question' => $ques
            ];

            $question_id = Question::create($arr)->id;

            $aa = 'answers'.$key;
            foreach($request->$aa as $key_2 => $val){

                $re = $request->$aa;

                if(end($re) == $key_2){
                    $is_true = '1';
                }
                else{
                    $is_true = '0';
                } 
                
                if($key_2 != 4){
                    $insert=  [
                        'question_id' => $question_id,
                        'answer' => $val,
                        'is_true' => $is_true
                    ];
    
                    Answer::insert($insert);
                }

            }

        }

        $users = User::where(['is_verified' =>  '1', 'role' => 'user'])->get();
        foreach($users as $user){
            $arr = [
                'sender_id' => 0,
                'reciever_id' => $user->id,
                'title' => 'level Created',
                'description' => 'A new Level has been created',
                'type' => 'level_create',
                'record_id' => 1,
                'seen' => '0',
                'is_admin' => '1'
            ];
            Notification::create($arr);
        }
        $redirect = url("admin/level/view/$level_id");
        return webcommonSuccessMessage ('Level Added Successfully!', false, $redirect);

        return webcommonSuccessMessage("level Added Successfully");
    }

    public function update(Request $request)
    {
        
        $genere_id = $request->genere;
        $level_data = [
            'genere_id' => $genere_id,
            'title' => '',
            'music' => ''
        ];
        
        foreach($request->question_ids as $key => $question_id){
            $arr =[
                'question' => $request->question[$key],
            ];

            if( $question_id != null)
            {            
 
                Question::where('id', (int) $question_id)->update($arr);
            }
            else{
                $arr['level_id'] = $request->level_id;
                $insert_id = Question::create($arr)->id;
            }
            
            $aa = 'answers'.$key;
            $answer_id = 'answers_ids'.$key;
            foreach($request->$aa as $key_2 => $val){
                
                $re = $request->$aa;
                
                if(end($re) == $key_2){
                    $is_true = '1';
                }
                else{
                    $is_true = '0';
                } 
                
                if($key_2 != 4){
                    $insert=  [
                        'answer' => $val,
                        'is_true' => $is_true
                    ];
                    if( $question_id != null )
                    {
                        Answer::where('id', (int) $request->$answer_id[$key_2])->update($insert);
                    }else{
                        $insert['question_id'] = $insert_id;
                       
                        Answer::insert($insert);
                    }
                }

            }
            
        }
        return webcommonSuccessMessage("level Updated Successfully");

    }

    public function view(Request $request,$genere_id=1)
    {
        $generes = Genere::all();
        if( $request->ajax() )
        {
            $generes = Level::where('genere_id',$request->id)->get();
            return DataTables::of($generes)
            ->addColumn('name', function ($levels){
                $content = "Level";
                return $content;
            })
            ->addColumn('action', function ($generes) {
                $edit_url = url('admin/level/view',[$generes->id]);
                $content = "";
                $content = '<a href="'.$edit_url.'" class=" btn-primary btn-sm"  title="View Level"><i class="fa fa-pencil-alt"></i></a> ';                
               
                return $content;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
           
        }

        return view('admin.levels.index', compact(['generes']));
        
    }
    public function deleteQuestion($id)
    {
        
        if(is_numeric($id))
        {
           
        $level_id = Question::find($id)->level_id;
        $count  = Question::where('level_id', $level_id)->count();
        
        if( $count > 3 )
        {
            $delete_answers = Answer::where('question_id',$id)->delete();
            $delete_question = Question::destroy($id);
            return webcommonSuccessMessage("Deleted Successfully");
            
            
        }
            return webcommonErrorMessage("Can not delete more");
        }
        return webcommonSuccessMessage("Removed Succssfully");
        
    }
    public function viewLevels(Request $request, $genere_id )
    {
        $generes = Genere::all();
        $level= Level::with(['questions.answers'])->withCount('questions')->where('id', $genere_id)->first(); 
        
        if(empty ($level)){
            return commonErrorMessage("No Level Found", 400);
        }
        $ar_1 = array();
        $array['level_id'] = $level->id;
        $array['level_title'] = $level->title;
        $array['genere_id'] = $level->genere_id;
        $array['level_music'] = $level->music;
        $array['total_questions'] = $level->questions_count;
        if($level->questions == '[]'){
            $ar_1['message'] = "No questions found for this level";
        }
        foreach($level->questions as $key => $question){
            $index = '';
            $ar_2['id'] = ++$key;
            $ar_2['question_id'] = $question->id;
            $ar_2['question'] = $question->question;

            foreach($question->answers as $key_2 => $answer){
                $ar_2['ans_key'][$key_2] = $answer->id;
                $ar_2['ans'][$key_2] = $answer->answer;
                $ar_2['coor'][$key_2] = 0;
                if($answer->is_true == 1){
                    $ar_2['coor'][$key_2] = 1;
                    $index = array_search($ar_2['ans'][$key_2], $ar_2['ans']);
                }
                
            }
            $ar_2['correct_key'] = $index;

            array_push($ar_1, $ar_2);

        }
            $response = ['status' => 1, 'message' => "Single Level with Questions ans Answers", 'level' =>  (object) $array, 'questions' =>  $ar_1 ];
            
            
        

        return view('admin.levels.view-level',compact('response','generes'));
        
    }

    
}
