<?php

class User  {

	private $first_name;
	private $last_name;

	public function set_name($first_name, $last_name){
		$this->first_name = $first_name;
		$this->last_name = $last_name;
	}

	public function get_name(){
		return $this->first_name . " " . $this->last_name;
	}

}


