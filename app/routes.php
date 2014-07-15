<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

include(app_path().'/models/User.php');

Route::get('/', function()
{
	return View::make('homepage');
});

Route::get('/lorem-ipsum', function()
{
	return View::make('lorem_ipsum');
});

Route::post('/lorem-ipsum', function()
{
	$input = Input::all();
	print_r($input);
});


Route::get('/random-user', function()
{
	$user = new User();
	$user->set_name("Laura", "Filman");
	return View::make('random_user')->with('user', $user);
});

Route::post('/random-user', function()
{
	$input = Input::all();
	print_r($input);
});