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


define("NUM_USERS_DEFAULT", 3);

Route::get('/random-user', function()
{
	return View::make('random_user')->with('users', UserGenerator::get_users(NUM_USERS_DEFAULT))
									->with('include_birthday', false)
									->with('include_location', false)
									->with('include_profile', false)
									->with('num_users_error', false);
});

Route::post('/random-user', function()
{
	$num_users = Input::get('num_users');
	$num_users_error = false;

	// Validate user input
	if ((!is_numeric($num_users) || $num_users > 20 || $num_users < 1)){
		// Throw error
		$num_users_error = true;

		//Set default if invalid input
		$num_users = NUM_USERS_DEFAULT;
	} 

	$include_birthday = Input::get('include_birthday');
	$include_location = Input::get('include_location');
	$include_profile = Input::get('include_profile');
	return View::make('random_user')->with('users', UserGenerator::get_users($num_users))
									->with('include_birthday', $include_birthday)
									->with('include_location', $include_location)
									->with('include_profile', $include_profile)
									->with('num_users_error', $num_users_error);
});
