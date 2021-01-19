<?php

use Illuminate\Support\Facades\Route;


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


//Routes::get('/home', [App\Http\Controllers\HomeControllers::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('user/exportar', [App\Http\Controllers\UserController::class, 'exportar'])->name('user.exportar');

Route::resource('user', 'userController');

Route::resource('persona', 'personaController');

Route::resource('cliente', 'clienteController');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('template/sb/index');
});

Route::get('/home', function () {
    return view('home/bienvenido');
});

Route::get('/login', function () {
    return view('login/iniciosesion');
});

Route::get('/login', function () {
    return view('login/index');
});

Route::get('/template', function () {
    return view('template/main');
});

