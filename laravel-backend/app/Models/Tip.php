<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserId',
        'MatchId',
        'Team1Score',
        'Team2Score',
        'Points'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id');
    }

    public function fixture(){
        return $this->belongsTo(Fixture::class,'id');
    }
}
