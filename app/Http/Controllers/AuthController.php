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
use App\DataObjects\ResponseDataObject;

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
                return response()->json([
                    'status' => true,
                    'msg' => 'usuário cadastrado com sucesso!'
                ], 201);

        }  catch(\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function store(AuthLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $token = auth()->user()->createToken('auth_token');
            return Auth::user();

            return response()->json([
                'status' => true,
                'message' => 'Logado com sucesso !',
                'token' => $token->plainTextToken
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Ops! Usuário incorreto!, verifique seu email e senha.',
        ], 401);
    }


    public function logout(Request $request)
    {
        Auth::guard('sanctum')->user()->tokens()->delete();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
