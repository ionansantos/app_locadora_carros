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
use App\Domain\ResponseTypeDomain;

class AuthController extends Controller
{

    private ResponseDataObject $ResponseDataObject;
    
    public function __construct() 
    {
        $this->ResponseDataObject = new ResponseDataObject;
    }

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
    public function login(AuthLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                $user = Auth::user(); // Obter o usuário autenticado
                
                $token = $user->createToken('auth_token')->plainTextToken;

                $this->ResponseDataObject->setData([
                    'user' => $user,
                    'token' => $token
                ]);

                return $this->ResponseDataObject->response();
            }

            $this->ResponseDataObject->setError(true);
            $this->ResponseDataObject->setTitle('Atenção!');
            $this->ResponseDataObject->setMessage('Usuário e/ou senha inválidos.');
            $this->ResponseDataObject->setType(ResponseTypeDomain::ERROR);
            $this->ResponseDataObject->setErrorCode(401);
    
            return $this->ResponseDataObject->response();
    }



    public function logout(Request $request)
    {
        try {
            Auth::guard('sanctum')->user()->tokens()->delete();
            
            $request->session()->invalidate();

            return $this->ResponseDataObject->response();
        } catch (\Exception $e) {

            return response()->json(['error' => 'Erro durante o logout'], 500);
        }
    }
}
