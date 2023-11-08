<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = [
        'genere_id',
        'title',
        'music'
    ];

    public function userlevel(){
        return $this->hasOne(UserLevel::class, 'level_id', 'id');
    }

    public function user_level_score()
    {
        return $this->hasOne(UserLevel::class, 'level_id', 'id')->select('id','level_id','score','user_id')->withDefault([
            'score' => 'Not played',
        ]);
    
    }

    public function questions(){
        return $this->hasMany(Question::class, 'level_id', 'id');
    }
}
