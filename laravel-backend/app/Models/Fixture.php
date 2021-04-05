<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    protected $fillable = [
        'Start',
        'Team1Id',
        'Team2Id',
        'Team1Score',
        'Team2Score',
        'Result'
    ];

    public function team(){
        return $this->belongsTo(Team::class,'id');
    }
    public function tips(){
        return $this->hasMany(Tip::class,'MatchId');
    }
}
