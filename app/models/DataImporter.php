<?php

class DataImporter  {

	public static function import_data_organized_by_lines($filepath){

		$handle = fopen($filepath, "r");
		$contents = fread($handle, filesize($filepath));
		fclose($handle);

		$data = explode("\n", $contents);
		
		return $data;
	}

	public static function import_data_organized_by_paragraphs($filepath){

		$handle = fopen($filepath, "r");
		$contents = fread($handle, filesize($filepath));
		fclose($handle);

		$chars_to_remove = array(":", ",", ".", "?", "!", "-", '"', "'", "]", "[", ";", "*", "(", ")");
		$contents = str_replace($chars_to_remove, "", $contents);

		$contents = str_replace(array("\n", "\r"), " ", $contents);

		$contents = preg_replace("/\s+/", " ", $contents);

		$data = explode(" ", $contents);

		$validated_data = array();
		while (count($data) > 0){
			$word = array_pop($data);
			$word = trim($word);
			$word = strtolower($word);

			if (strlen($word) > 1){
				array_push($validated_data, $word);
			}

		}

		return $validated_data;
	}


}


