<?php
namespace App\Services\Levels;
use App\Contracts\LevelInterface;
use App\Models\Level;
use App\Models\UserLevel;
use Illuminate\Support\Facades\Auth;
use Arr;
class LevelService implements LevelInterface {
    public function allLevels($request){
        $levels = Level::with(['userlevel'=>function($query){
            return $query->where('user_id', Auth::user()->id);
        }])->get();
        
        if(empty ($levels[0]->userlevel)){
            $arr = [
                'user_id' => Auth::user()->id,
                'level_id' => 1,
                'is_completed' => 0,
                'score' => 0
            ];

            UserLevel::create($arr);
            $levels = Level::with(['userlevel'=>function($query){
                return $query->where('user_id', Auth::user()->id);
            }])->get();
        }
        
        if(empty ($levels)){
            return commonErrorMessage("No Level Found", 400);
        }else{
            return apiSuccessMessage("All Levels" , $levels);
        }
    }


    public function findLevel($request){
        $level_id = $request->level_id;

        $findUserLevel = UserLevel::where(['user_id' =>  auth()->id() , 'level_id' =>  $level_id])->first();
        if( empty($findUserLevel) )
        {
            return commonErrorMessage("You not authorized for that level please try again", 400);
        }
        
        $level= Level::with(['questions.answers'])->withCount('questions')->where('id', $level_id)->first(); 
        if(empty ($level)){
            return commonErrorMessage("No Level Found", 400);
        }
        $ar_1 = array();
        $array['level_id'] = $level->id;
        $array['level_title'] = $level->title;
        $array['level_music'] = $level->music;
        $array['total_questions'] = $level->questions_count;
        if($level->questions == '[]'){
            $ar_1['message'] = "No questions found for this level";
        }
        foreach($level->questions as $key => $question){
            $index = '';
            $ar_2['id'] = ++$key;
            $ar_2['question'] = $question->question;

            foreach($question->answers as $key_2 => $answer){
                $ar_2['ans'][$key_2] = $answer->answer;

                if($answer->is_true == 1){
                    $index = array_search($ar_2['ans'][$key_2], $ar_2['ans']);
                }
            }
            $ar_2['correct_key'] = $index;

            array_push($ar_1, $ar_2);

        }
            $response = ['status' => 1, 'message' => "Single Level with Questions ans Answers", 'level' =>  (object) $array, 'questions' =>  $ar_1 ];
            return response()->json($response, 200);
        
    }

    public function levelScore($request)
    {
        
        $level_id = $request->level_id;
        $score = $request->score;
        $findUserLevel = UserLevel::where(['user_id' =>  auth()->id(), 'level_id' =>  $level_id])->first();
                    

        
        if( empty($findUserLevel) ){
            return commonErrorMessage("You not authorized for that level please try again", 400);
        }
            
            if ( $score < 50  && $findUserLevel->is_completed == 0 )
            {
                $findUserLevel->is_completed = 0;
                $findUserLevel->score = $score;
                $findUserLevel->save();
                return commonSuccessMessage("Success");
            }

            if($score > $findUserLevel->score && $findUserLevel->is_completed == 1)
            {
                $findUserLevel->score = $score;
                $findUserLevel->save();
                return commonSuccessMessage("Success");
            }
                    $findUserLevel->is_completed = 1;
                    $findUserLevel->score = $score;
                    $findUserLevel->save();
                    
                    $level_data = Level::whereId($level_id)->first();
                    $genere_id = $level_data->genere_id;
                    $generes = Level::where(['genere_id' => $genere_id])->pluck('id');
                    $filtered = $generes->filter(function ($value) use ($level_id)
                    {
                        return $value > $level_id ;
                    });
                    
                    $next_level_id = array_first($filtered->toArray());
                    
                    if ( !empty ($next_level_id) )
                    {
                        $arr = [
                            'user_id' => auth()->id(),
                            'level_id' => $next_level_id,
                        ];
                        $count = UserLevel::where($arr)->count();
                        
                        if ( $count == 0 )
                        {
                            $arr['is_completed'] = 0;
                            $arr['score'] = 0;
                            UserLevel::create($arr);
                        }
                        
                    }

                    return commonSuccessMessage("Success");
        
    }


    
}