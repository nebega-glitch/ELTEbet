<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tip;
Use Exception;
class TipController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $tips = $user->tips;
        return $tips;
    }

    public function store(Request $request)
    {
        $request->validate([
            'MatchId' => 'required|integer',
            'Team1Score' =>'required|integer|min:0',
            'Team2Score' =>'required|integer|min:0'
        ]);
        try{
            $tip=Tip::create([
                'UserId' => auth()->user()->id,
                'MatchId' => $request->MatchId,
                'Team1Score' => $request->Team1Score,
                'Team2Score' => $request->Team2Score
            ]);
            return response($tip,201);
        }catch (Exception $e){
            return response([
                'message' => 'Adatbazis hiba'
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $tip=Tip::find($id);
        if($tip != NULL){
            if ($tip->UserId == $user->id){
                $request->validate([
                    'Team1Score' =>'required|integer|min:0',
                    'Team2Score' =>'required|integer|min:0'
                ]);
                try{
                    $tip->update([
                        'UserId' => $user->id,
                        'MatchId' => $tip->MatchId,
                        'Team1Score' => $request->Team1Score,
                        'Team2Score' => $request->Team2Score
                    ]);
                    return response($tip,201);
                } catch(Exception $e){
                    return response([
                        'message' => 'Adatbazis hiba'
                    ], 500);
                }
            }else return response([
                'message' => 'Invalid User'
            ], 500);
        } else return response([
            'message' => 'Invalid ID'
        ], 500);
    }

    public function destroy($id)
    {
        $user = auth()->user();
        $tip=Tip::find($id);
        if($tip != NULL){
            if ($tip->UserId == $user->id){
                return Tip::destroy($id);
            }
            else return response([
                'message' => 'Invalid User'
            ], 500);
        }else return response([
            'message' => 'Invalid ID'
        ], 500);
    }
}
