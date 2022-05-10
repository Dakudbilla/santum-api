<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|confirmed'
        ]);

        $user= User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password'])
        ]);

        $token= $user->createToken('myapptoken')->plainTextToken;

        $response=[
            'user'=>$user,
            'token'=>$token
        ];

        return response($response, 201);
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email'=>'required|email',
            'password'=>'required|string'
        ]);

        //check if email exists
        $user = User::where('email',$fields['email'])->first();
        //check password
        if(!$user || !Hash::check($fields['password'], $user->password)){
            return response([
                'message'=>"Wrong Credentials"
            ],401);
        }

        $token= $user->createToken('myapptoken')->plainTextToken;

        $response=[
            'user'=>$user,
            'token'=>$token
        ];

        return response($response, 200);
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return[
            'message'=>"logged Out"
        ];

    }
}
