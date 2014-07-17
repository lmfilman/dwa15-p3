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
	$user_generator = new UserGenerator();
	$users = $user_generator->get_users(3);
	return View::make('random_user')->with('users', $users);
});

Route::post('/random-user', function()
{
	$num_users = Input::get('num_users');
	$user_generator = new UserGenerator();
	$users = $user_generator->get_users($num_users);
	return View::make('random_user')->with('users', $users);
});