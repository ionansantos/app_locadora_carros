<?php

use App\Http\Controllers\AuthController;  
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect('login');
});

Route::inertia('/register', 'register');
Route::inertia('/login', 'login');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::inertia('/dashboard', 'dashboard');
    Route::inertia('/marcas', 'marcas');
    Route::inertia('/modelos', 'modelos');
    Route::inertia('/carros', 'carros');
    Route::inertia('/locacoes', 'locacoes');
});
