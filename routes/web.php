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
//Route::get('index','UserController@index');
//Route::get('top/{id}/{uid}','UserController@top')->name('top.id');
//Route::get('view','UserController@view');
//Route::post('form','UserController@form');
//Route::get('cookie','UserController@cookie');
//Route::get('sess','UserController@sess');
//
//Route::get('admin','LoginController@index')->middleware('check:abc');
//Route::get('login','LoginController@login');
//Route::get('task','TaskController@index');
Route::get('form',function(){
//    Cache::store('redis')->set('name','lili');
    echo Cache::store('redis')->get('name');
    return 33;
});
Route::post('form/recive','FormController@recive');
Route::get('form/list','FormController@userList');
