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
                    'message' => 'Equal'
                ], 500);
            } catch(Exception $e){
                return response([
                    'message' => 'DB Error'
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
                        'message' => 'DB Error'
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
                    'Result' => 'required'
                ]);
                try{
                    $fixture->update($request->all());
                    return response($fixture,201);
                } catch(Exception $e){
                    return response([
                        'message' => 'DB Error'
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
