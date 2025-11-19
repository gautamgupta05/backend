<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        $req->validate(['email' => 'required|email', 'password' => 'required']);
        if (!Auth::attempt($req->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        $user = Auth::user();
        $token = $user->createToken('api-token')->plainTextToken;
        return response()->json(['user' => $user, 'token' => $token]);
    }

    public function logout(Request $req)
    {
        $req->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'logged out']);
    }

    public function me(Request $req)
    {
        return response()->json($req->user());
    }
}
