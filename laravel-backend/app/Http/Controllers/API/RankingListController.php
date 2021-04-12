<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tip;

class RankingListController extends Controller
{
    public function index()
    {
        $users = User::all();
        $rankingList = array(); 
        foreach ($users as $user){
            $tips = $user->tips;
            $counter = 0;
            foreach( $tips as $tip){
                $counter = $counter + $tip->Points;
            }
            $rankingList[$user->name] = $counter;
        }
        krsort($rankingList);
        return $rankingList;
    }

}
