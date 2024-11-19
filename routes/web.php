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
    return redirect('home');
});

Route::inertia('/home', 'home')->name('home');

Route::inertia('/register', 'register');
Route::inertia('/login', 'login')->name('login');

Route::middleware(['auth:sanctum'])->group(function () {

    // rota perfil usuario admin
    Route::inertia('/marca', 'marcas');
    Route::inertia('/perfil', 'perfil');

    Route::inertia('/dashboard', 'dashboard');
    Route::inertia('/carros', 'carros');
    Route::inertia('/locacoes', 'locacoes');
    Route::inertia('/modelo', 'modelos');

    // rota perfil usuario cliente
    Route::inertia('/homecliente', 'client/homecliente');

});


Route::fallback(function () {
    return view('error'); // Substitua 'errors.404' pelo nome da sua página personalizada 404
});