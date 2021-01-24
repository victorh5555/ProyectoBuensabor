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


Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'homepage'])->name('homepage');

Route::get('/post', [App\Http\Controllers\HomeController::class, 'post'])->name('post');

Route::get('user/exportar', [App\Http\Controllers\UserController::class, 'exportar'])->name('user.exportar');

Route::resource('user', 'userController');

Route::resource('persona', 'personaController');

Route::resource('cliente', 'clienteController');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

