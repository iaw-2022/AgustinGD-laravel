<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\ProductoController::class, 'index'])->name('home');

Route::resource('productos', 'App\Http\Controllers\ProductoController');
Route::resource('categorias', 'App\Http\Controllers\CategoriaController');
Route::resource('users', 'App\Http\Controllers\UserController');