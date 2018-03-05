<?php

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

Route::get('/insert',function(){
	DB::table('cards')->insert(['title'=>'My New Card']);
});

Route::get('/read',function(){
	$res = DB::table('cards')->get();
	return $res;
});

Route::get('/cards','CardsController@index');
Route::get('/cards/{card}','CardsController@show');

Route::post('/cards/{card}/notes','NotesController@store');

Route::get('/notes/{note}/edit','NotesController@edit');
Route::patch('/notes/{note}','NotesController@update');