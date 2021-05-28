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

Route::get('/home', 'HomeController@index')->name('home')->middleware('refresh');
Route::group([

    'prefix'=>'usuario',
    'middleware'=>['auth']
], function(){
    Route::post('/criar', 'UserController@create')->name('users.create');
    Route::post('/{id}/atualizar', 'UserController@update')->where('id', '[0-9]+')->name('users.update');
    Route::get('/{id}/editar', 'UserController@edit')->where('id', '[0-9]+')->name('users.edit');
    Route::get("/novo","UserController@new")->name("users.new");
    Route::post('/{id}/deletar', 'UserController@destroy')->where('id', '[0-9]+')->name('users.destroy');
});