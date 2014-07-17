<?php

//http://www.outpost9.com/files/WordLists.html

class UserGenerator  {

	public static function get_users ($num_users){

		//Read in first names
		$first_names = self::import_data(app_path().'/models/actor-givenname');
		shuffle($first_names);

		//Read in last names
		$last_names = self::import_data(app_path().'/models/actor-surname');	
		shuffle($last_names);

		//Read in cities
		$countries_cities = self::import_data(app_path().'/models/countries_cities.txt');
		shuffle($countries_cities);

		$users = array();

		//We can assume $num_users < min($first_names.length, $last_names.length)
		//Create an array of Users
		for ($i = 0; $i < $num_users; $i++){

			//Create a user
			$user = new User();

			//Set the user's name
			$user->set_name(trim(array_pop($first_names)), trim(array_pop($last_names)));

			//Set the user's birthday
			//Between 1913-04-29 and 2013-12-31
			$int= rand(-1788516401,1388516401);
			$birthday = date("Y-m-d",$int);
			$user->set_birthday($birthday);

			//Set the user's location
			$country_city = trim(array_pop($countries_cities));
			$country_city_array = explode(",", $country_city);
			$user->set_location($country_city_array[1] . ", " . $country_city_array[0]);

			array_push($users, $user);
		}

		return $users;
	}



	private static function import_data($filepath){

		$handle = fopen($filepath, "r");
		$contents = fread($handle, filesize($filepath));
		fclose($handle);

		$names = explode("\n", $contents);

		return $names;
	}


}


