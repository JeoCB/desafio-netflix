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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get("/usuarios", "UserController@index")->name('users.index');
Route::post('/usuario/deletar/{id}', 'UserController@destroy')->name('users.delete')->where('id', '[0-9]+');
Route::get('/home', 'HomeController@index')->name('home');
