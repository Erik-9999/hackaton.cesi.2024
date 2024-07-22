<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request){
        $credentials = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8'
        ]);

        if($credentials->fails()){
            return response()->json(['error' => $credentials->errors()], 401);
        }

        if(!Auth::attempt(['email' => $request['email'], 'password' => $request['password']], true)){
            return response()->json(['error' => $request->errors()], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('access_token')->plainTextToken;


        return response()->json(['token' => $token, 'user' => $user], 200);
    }

    public function register(Request $request)
    {
        $credentials = Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|integer',
        ]);

        if($credentials->fails()){
            return response()->json(['error'=> $credentials->errors()], 401);
        }

        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        if($user){
            $token = $user->createToken('access_token')->plainTextToken;
            return response()->json(['token' => $token, 'user' => $user], 200);
        }
    }
}
