<?php

class DataImporter  {

	public static function import_data($filepath){

		$handle = fopen($filepath, "r");
		$contents = fread($handle, filesize($filepath));
		fclose($handle);

		$data = explode("\n", $contents);
		
		return $data;
	}


}


