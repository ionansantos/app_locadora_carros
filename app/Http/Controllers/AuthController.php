<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function login(AuthLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        
        if(!auth()->attempt($credentials))
            abort(401,' credenciais inválidas');
        
        $token = auth()->user()->createToken('auth_token');

            return response()->json([
                'status' => true,
                'message' => 'Logado com sucesso !',
                'token' => $token->plainTextToken
            ], 200);
    
        // try {

        //     if(!Auth::attempt($request->only(['email', 'password']))){
        //         return response()->json([
        //             'status' => false,
        //             'message' => 'Email ou senha estão incorretos.',
        //         ], 401);
        //     }

        //     $user = User::where('email', $request->email)->first();

        //     return response()->json([
        //         'status' => true,
        //         'message' => 'Logado com sucesso !',
        //         'token' => $user->createToken("API TOKEN")->plainTextToken
        //     ], 200);

        // } catch (\Throwable $th) {
        //     return response()->json([
        //         'status' => false,
        //         'message' => $th->getMessage()
        //     ], 500);
        // }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()
            ->json([], 204);
    }
}
