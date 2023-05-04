<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});


 
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});




Route::controller(ProductoController::class)->group(function () {
    Route::get('/productos/edit/{id}', 'edit');
});

Route::controller(CategoriaController::class)->group(function () {
    Route::get('/categorias/edit/{id}', 'edit');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/usuarios/edit/{id}', 'edit');
});
Route::controller(ClienteController::class)->group(function () {
    Route::get('/clientes/edit/{id}', 'edit');
});


Route::resource('usuarios',UserController::class);
Route::resource('productos',ProductoController::class);
Route::resource('categorias',CategoriaController::class);
Route::resource('clientes',ClienteController::class);

