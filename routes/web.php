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

Route::get('inicio', [
    'as' => 'inicio',
    'uses' => 'HomeController@inicio'
]);


Route::resource('home', 'HomeController');

Route::resource('movie', 'MovieController');

Route::resource('user', 'UserController');

Route::resource('loan', 'LoanController');

//Route::get('report1', 'MovieController@report1');

Route::get('report1', [
    'as' => 'report1',
    'uses' => 'MovieController@report1'
    ]);

Route::get('eloquent_orm', [
    'as' => 'eloquent_orm',
    'uses' => 'UserController@eloquent_orm'
]);

Route::get('fluent_query_builder', [
    'as' => 'fluent_query_builder',
    'uses' => 'UserController@fluent_query_builder'
]);


Auth::routes();

Route::get('/home', 'HomeController@index');
