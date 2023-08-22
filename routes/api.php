<?php

use App\Http\Controllers\AuthController;   
use App\Http\Controllers\MarcaController; 
use App\Http\Controllers\ModeloController; 
use App\Http\Controllers\CarroController; 
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::post('register', [AuthController::class, 'createUser']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function(){   
    
    Route::get('marca', [MarcaController::class, 'index']);
    Route::get('marca/get/{id}', [MarcaController::class, 'show']);
    Route::post('marca/create', [MarcaController::class, 'store']);
    Route::post('marca/update/{id}', [MarcaController::class, 'update']);
    Route::delete('marca/delete/{id}', [MarcaController::class, 'destroy']);

    Route::get('modelo', [ModeloController::class, 'index']);
    Route::get('modelo/get/{id}', [ModeloController::class, 'show']);
    Route::post('modelo/create', [ModeloController::class, 'store']);
    Route::post('modelo/update/{id}', [ModeloController::class, 'update']);
    Route::delete('modelo/delete/{id}', [ModeloController::class, 'destroy']);

    Route::get('carro', [CarroController::class, 'index']);
    Route::get('carro/get/{id}', [CarroController::class, 'show']);
    Route::post('carro/create', [CarroController::class, 'store']);
    Route::post('carro/update/{id}', [CarroController::class, 'update']);
    Route::delete('carro/delete/{id}', [CarroController::class, 'destroy']);
});

