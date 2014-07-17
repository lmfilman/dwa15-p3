<?php

class User  {

	private $first_name;
	private $last_name;
	private $birthday;
	private $location;
	private $profile;

	//NAME
	public function set_name($first_name, $last_name){
		$this->first_name = $first_name;
		$this->last_name = $last_name;
	}
	public function get_name(){
		return $this->first_name . " " . $this->last_name;
	}
	//BIRTHDAY
	public function set_birthday($birthday){
		$this->birthday = $birthday;
	}
	public function get_birthday(){
		return $this->birthday;
	}
	//ADDRESS
	public function set_location($location){
		$this->location = $location;
	}	
	public function get_location(){
		return $this->location;
	}
	//PROFILE
	public function set_profile($profile){
		$this->profile = $profile;
	}
	public function get_profile(){
		return $this->profile;
	}

}


