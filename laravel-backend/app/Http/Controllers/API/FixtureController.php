<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fixture;
use App\Models\User;
use App\Models\Tip;
Use Exception;

class FixtureController extends Controller
{
    public function index()
    {
        return Fixture::all();
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        if($user->is_admin == 1){
            $request->validate([
                'Start' => 'required|date',
                'Team1Id' =>'required|integer|min:1|max:24',
                'Team2Id' =>'required|integer|min:1|max:24'
            ]);
    
            try{
                If($request->Team1Id != $request->Team2Id){
                    $temp=Fixture::create($request->all());
                    return response($temp,201);
                } else return response([
                    'message' => 'Azonos IDk'
                ], 500);
            } catch(Exception $e){
                return response([
                    'message' => 'Adatbazis hiba'
                ], 500);
            }
        } else return response([
            'message' => 'Standard user'
        ], 401);
    }

    public function update(Request $request, $id)
    {
        $user = auth()->user();
        if($user->is_admin == 1){
            $fixture=Fixture::find($id);
            if ($fixture != NULL){
                $request->validate([
                    'Start' => 'required|date',
                    'Team1Id' =>'required|integer|min:1|max:24',
                    'Team2Id' =>'required|integer|min:1|max:24'
                ]);
                try{
                    $fixture->update($request->all());
                    return response($fixture,201);
                } catch(Exception $e){
                    return response([
                        'message' => 'Adatbazis hiba'
                    ], 500);
                }
            }else return response([
                'message' => 'Invalid ID'
            ], 500);
        } else return response([
            'message' => 'Standard user'
        ], 401);
    }

    public function updateResult(Request $request,$id)
    {
        $user = auth()->user();
        if($user->is_admin == 1){
            $fixture=Fixture::find($id);
            if ($fixture != NULL){
                $request->validate([
                    'Team1Score' =>'required|integer|min:0',
                    'Team2Score' =>'required|integer|min:0',
                ]);
                try{
                    $result ='';
                    if ($request->Team1Score == $request->Team2Score){
                        $result = 'D';
                    }
                    else if($request->Team1Score > $request->Team2Score){
                        $result = 'H';
                    } else $result = 'V';
                    $fixture->update([
                        'Team1Score' => $request->Team1Score,
                        'Team2Score' => $request->Team2Score,
                        'Result' => $result
                    ]);
                    $tips = $fixture->tips;
                    foreach($tips as $tip){
                        $p = 0;
                        if ($fixture->Result == 'V' && $tip->Team1Score < $tip->Team2Score 
                        || $fixture->Result == 'H' && $tip->Team1Score > $tip->Team2Score 
                        || $fixture->Result == 'D' && $tip->Team1Score == $tip->Team2Score){
                            if($fixture->Team1Score == $tip->Team1Score && $fixture->Team2Score == $tip->Team2Score){
                                $p = 5;
                            }
                            else if(($fixture->Team1Score - $fixture->Team2Score) == ($tip->Team1Score - $tip->Team2Score)){
                                $p = 3;
                            }
                            else if (($fixture->Team1Score + $fixture->Team2Score) == ($tip->Team1Score + $tip->Team2Score)){
                                $p = 2;
                            }else $p = 1;
                        }
                        $temp = Tip::find($tip->id);
                        $temp->update(['Points'=>$p]);
                    }
                    return response($fixture,201);
                } catch(Exception $e){
                    return response([
                        'message' => 'Adatbazis hiba'
                    ], 500);
                }
            }else return response([
                'message' => 'Invalid ID'
            ], 500);
        } else return response([
            'message' => 'Standard user'
        ], 401);
    }
    public function destroy($id)
    {
        $user = auth()->user();
        if($user->is_admin == 1){
            $fixture=Fixture::find($id);
            if ($fixture != NULL){
                return Fixture::destroy($id);
            }else return response([
                'message' => 'Invalid ID'
                ], 500);
        }else return response([
            'message' => 'Standard user'
        ], 401);
    }
}
