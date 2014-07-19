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


/*
|--------------------------------------------------------------------------
| HOMEPAGE
|--------------------------------------------------------------------------
|
*/
Route::get('/', function()
{
	return View::make('homepage');
});

/*
|--------------------------------------------------------------------------
| LOREM IPSUM GENERATOR
|--------------------------------------------------------------------------
|
*/
define("NUM_PARAGRAPHS_DEFAULT", 3);

Route::get('/lorem-ipsum', function()
{
	$num_paragraphs = NUM_PARAGRAPHS_DEFAULT;
	
	return View::make('lorem_ipsum')->with('num_paragraphs', $num_paragraphs)
									->with('lorem_ipsum_text', LoremIpsumGenerator::get_text($num_paragraphs))
									->with('num_paragraphs_error', false);

});

Route::post('/lorem-ipsum', function()
{
	$num_paragraphs = Input::get('num_paragraphs');
	$num_paragraphs_error = false;

	// Validate user input
	if ((!is_numeric($num_paragraphs) || $num_paragraphs > 20 || $num_paragraphs < 1)){
		// Throw error
		$num_paragraphs_error = true;

		//Set default if invalid input
		$num_paragraphs = NUM_PARAGRAPHS_DEFAULT;
	} 
	return View::make('lorem_ipsum')->with('num_paragraphs', $num_paragraphs)
									->with('lorem_ipsum_text', LoremIpsumGenerator::get_text($num_paragraphs))
									->with('num_paragraphs_error', $num_paragraphs_error);

});

/*
|--------------------------------------------------------------------------
| USER GENERATOR
|--------------------------------------------------------------------------
|
*/
define("NUM_USERS_DEFAULT", 3);

Route::get('/random-user', function()
{
	return View::make('random_user')->with('num_users', NUM_USERS_DEFAULT)
									->with('users', UserGenerator::get_users(NUM_USERS_DEFAULT))
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
	return View::make('random_user')->with('num_users', $num_users)
									->with('users', UserGenerator::get_users($num_users))
									->with('include_birthday', $include_birthday)
									->with('include_location', $include_location)
									->with('include_profile', $include_profile)
									->with('num_users_error', $num_users_error);
});
