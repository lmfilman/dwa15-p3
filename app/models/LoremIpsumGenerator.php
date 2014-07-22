<?php

//http://la.wikisource.org/wiki/De_finibus_bonorum_et_malorum/Liber_Primus

class LoremIpsumGenerator  {

	public static function get_text ($num_paragraphs, $start_with_lorem_ipsum){

		//Read in Latin words
		$lorem_ipsum_words = self::import_data(app_path().'/models/lorem_ipsum.txt');

		$text = "";

		//Create paragraphs
		for ($i = 0; $i < $num_paragraphs; $i++){

			$paragraph = "<p>";

			//Create sentences
			$num_sentences_per_paragraph = rand(3, 10);
			for ($j = 0; $j < $num_sentences_per_paragraph; $j++){

				$sentence = "";
				//Create words
				$num_words_per_sentence = rand(8, 20);
				for ($k = 0; $k < $num_words_per_sentence; $k++){

					if ($start_with_lorem_ipsum && $i == 0 && $j == 0 && $k == 0){
						
						//Start with lorem ipsum
						$sentence = $sentence . "Lorem ipsum"; 

					} else {
						//Get random word from list of Latin words
						$rand_word_index = rand(0, count($lorem_ipsum_words) - 1);
						$word = $lorem_ipsum_words[$rand_word_index];
						
						//Capitalize first word in sentence
						if ($k == 0){
							$word = ucfirst($word);
						}

						//Append word to sentence block
						$sentence = $sentence . ($k == 0 ? "" : " ") . $word; 
					}
				}

				//Append sentence to paragraph block
				$paragraph = $paragraph . $sentence . ". ";

			}

			//Append paragraph to text block
			$text = $text . $paragraph . "</p>";
		}

		return $text;
	}

	private static function import_data($filepath){

		$handle = fopen($filepath, "r");
		$contents = fread($handle, filesize($filepath));
		fclose($handle);

		//Replace special chars, like ?, *, (, ), [, ], etc. with " "
		$contents = preg_replace("/[^a-z]/", " ", $contents);
		//Replace multi-space with single-space
		$contents = preg_replace("/\s+/", " ", $contents);

		$data = explode(" ", $contents);

		/* Make letters lowercase and remove words of length < 1, 
		 * since above regex created words like 'M' and 'D'.
		*/
		$validated_data = array();
		while (count($data) > 0){
			$word = array_pop($data);
			$word = strtolower($word);

			if (strlen($word) > 1){
				array_push($validated_data, $word);
			}

		}

		return $validated_data;
	}

}


