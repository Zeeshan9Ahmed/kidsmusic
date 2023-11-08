<?php

namespace App\Http\Controllers\Api\User\Level;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Level\FindLevelRequest;
use Illuminate\Http\Request;
use App\Contracts\LevelInterface;
use App\Http\Requests\Api\Level\LevelScoreRequest;
use App\Models\Genere;
use App\Models\Level;
use App\Models\UserLevel;
use Auth;
use PhpParser\Node\Expr\FuncCall;

class LevelController extends Controller
{
    private $level;
    public function __construct(LevelInterface $level){
        $this->level = $level;
    }

    public function allGeneres(Request $request){
        $generes = Genere::all();
        if($generes->count() == 0){
            return commonErrorMessage("No Genere Found", 400);
        }
        return apiSuccessMessage("Generes Data", $generes);
        
    }

    public function genereLevel(Request $request){
        
        $genere_id = $request->genere_id;
        $levels = Level::with(['userlevel'=>function($query){
            return $query->where('user_id', auth()->id());
        }])->where('genere_id', $genere_id)->get();
        
        if ( $levels->count() == 0 )
        {
            return commonErrorMessage("No Data Found", 404);
        }
        $level = $levels->first();
        
        if(empty ($level->userlevel)){
            $arr = [
                'user_id' => auth()->id(),
                'level_id' => $level->id,
                'is_completed' => 0,
                'score' => 0
            ];

            UserLevel::create($arr);
            $levels = Level::with(['userlevel'=>function($query){
                return $query->where('user_id', auth()->id());
            }])->where('genere_id', $genere_id)->get();
                    
        }

        
        
        if(($levels->count() == 0)){
            return commonErrorMessage("No Data Found", 400);
        }else{
            return apiSuccessMessage("Genere Levels Data" , $levels);
        }
    }
    public function index(Request $request){
        return $this->level->allLevels($request);
    }

    public function singleLevel(FindLevelRequest $request){
        return $this->level->findLevel($request);
    }

    public function saveScore(LevelScoreRequest $request){
        return $this->level->levelScore($request);
    }

    public function addMusic(Request $request){
        if($request->hasFile('music')){
            $musicName = time().'.'.$request->music->getClientOriginalExtension();
            $request->music->move(public_path('/uploadedmusics'), $musicName);
            $music = asset('public/uploadedmusics')."/".$musicName;
            
        }
        return $request->all();
    }
}
