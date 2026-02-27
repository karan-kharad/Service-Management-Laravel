<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash,Auth;
use Spatie\Permission\Models\Role;


class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:6',
            'role'=>'required|string|in:owner,employee'
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        $user->assignRole($request->role);

        return response()->json(['message'=>'User registered successfully'],201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);

        if (!auth ::attempt($request->only('email','password'))){
            return response()->json(['message'=>'Invalid credentials'],401);
        }

        $user = auth()->user();
        $token = $user->createToken('API TOKEN')->accessToken;

        return response()->json([
            'token'=>$token,
            'role'=>$user->getRoleNames()
        ]);
    }

}
