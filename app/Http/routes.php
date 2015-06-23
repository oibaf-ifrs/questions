<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/*
Route::get('questao', 'QuestaoController@index');
Route::get('questao/{id}', 'QuestaoController@show');
Route::get('questao/create', 'QuestaoController@create');
*/
// RESTFul controller
//http://laravel.com/docs/5.0/controllers#restful-resource-controllers
Route::resource('questao','QuestaoController');
Route::post('questao/{param1?}/{param2?}', 'QuestaoController@correct');
Route::get('questaoall', 'QuestaoController@all');

Route::resource('alternativa','AlternativaController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
