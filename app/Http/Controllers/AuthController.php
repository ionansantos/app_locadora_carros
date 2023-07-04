<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        
        $credentials = $request->all(['email', 'password']);
     
        $token = auth()->attempt($credentials);
        
        if($token === false){
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        return $this->respondWithToken($token);

    
        // if (auth()->attempt($credentials)) {
        //     $user = Auth::user();
        //     $token = $user->createToken('Your Token Name');
        //     return $this->respondWithToken($token);
        // } else {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        // $credentials = $request->all(['email', 'password']);

        // $token = auth('api')->attempt($credentials);
        // dd($token);
    }

    public function logout() {
        return 'logout';
    }

    public function refresh() {
        return 'refresh';
    }

     public function me() {
        return 'me';
    }
}
