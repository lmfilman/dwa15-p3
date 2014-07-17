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
	return View::make('random_user')->with('users', UserGenerator::get_users(3))
									->with('include_birthday', false)
									->with('include_location', false)
									->with('include_profile', false);
});

Route::post('/random-user', function()
{
	$num_users = Input::get('num_users');

	//TODO: Validate $num_users

	$include_birthday = Input::get('include_birthday');
	$include_location = Input::get('include_location');
	$include_profile = Input::get('include_profile');
	return View::make('random_user')->with('users', UserGenerator::get_users($num_users))
									->with('include_birthday', $include_birthday)
									->with('include_location', $include_location)
									->with('include_profile', $include_profile);
});
