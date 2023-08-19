<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRegisterRequest;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create User
     * @param Request $request
     * @return User 
     */
    public function createUser(AuthRegisterRequest $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
                return response()->json(['msg' => 'usuário cadastrado com sucesso!'], 201);
        }  catch(\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }



    public function create() 
    {   
        return Inertia::render('login');
    }

    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            $token = auth()->user()->createToken('auth_token');
        
            return response()->json([
                'status' => true,
                'message' => 'Logado com sucesso !',
                'token' => $token->plainTextToken
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Credenciais inválidas',
        ], 401);
    }


    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()
            ->json([], 204);
    }
}
