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


Route::get('/teams', 'TeamController@index');
Route::get('/teams/{team_id}',['as' => 'single_team' ,'uses' => 'TeamController@show']);

Route::get('/players/{id}' , 'PlayerController@showplayer');

Route::get('/auth/register' , 'RegisterController@create');
Route::post('/auth/register' ,'RegisterController@store');

Route::get('/auth/login' , ['as' => 'login' , 'uses' =>'LoginController@create']);
Route::post('/auth/login' , 'LoginController@store');

Route::get('/logout', 'LoginController@logout');

Route::post('/comment/{team_id}', [ 'as'=> 'comment' , 'uses' => 'CommentController@store']);
Auth::routes(['verify' => true]);

Route::get('email/user_verification/{id}',['as' => 'verify' , 'uses' => 'LoginController@verify']);

