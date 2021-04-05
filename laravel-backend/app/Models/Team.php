<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Picture',
        'Group'
    ];

    public function fixtures1(){
        return $this->hasMany(Fixture::class,'Team1Id');
    }
    public function fixtures2(){
        return $this->hasMany(Fixture::class,'Team2Id');
    }
}
