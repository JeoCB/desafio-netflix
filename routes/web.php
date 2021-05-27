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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/usuario/criar', 'UserController@create')->name('users.create');
Route::post('/usuario/{id}/atualizar', 'UserController@update')->where('id', '[0-9]+')->name('users.update');
Route::post('/usuario/{id}/deletar', 'UserController@destroy')->where('id', '[0-9]+')->name('users.destroy');

