<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
Use Exception;


class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string'
        ]);
        
        try{
            $user = User::create([
                'name' => $fields['name'],
                'password' => bcrypt($fields['password']),
                'is_admin' => false
            ]);
        } catch (Exception $e){
            return response([
                'message' => 'Adatbazis hiba'
            ], 500);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('name', $fields['name'])->first();

        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Invalid pw or username'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 200);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return response([
            'message' => 'Logged out'
        ],200);
    }
}