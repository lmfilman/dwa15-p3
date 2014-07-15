<?php

//http://www.infochimps.com/datasets/word-list-21000-common-given-names-us-great-britain/downloads/265921
class User  {

	var $first_name;
	var $last_name;

	function set_name($first_name, $last_name){
		$this->first_name = $first_name;
		$this->last_name = $last_name;
	}

	function get_name(){
		return $this->first_name . " " . $this->last_name;
	}

}


