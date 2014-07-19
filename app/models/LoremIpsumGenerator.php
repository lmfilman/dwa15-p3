<?php

class LoremIpsumGenerator  {

	public static function get_text ($num_paragraphs){

		//Read in Latin words
		$lorem_ipsem_words = DataImporter::import_data(app_path().'/models/lorem_ipsum.txt');

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

					$rand_word_index = rand(0, count($lorem_ipsem_words) - 1);
					
					$word = $lorem_ipsem_words[$rand_word_index];
					$word = str_replace("\n", "", trim($word));
					
					if ($k == 0){
						$word = ucfirst($word);
					}

					//Append word to sentence block
					$sentence = $sentence . ($k == 0 ? "" : " ") . $word; 

				}

				//Append sentence to paragraph block
				$paragraph = $paragraph . $sentence . ". ";

			}

			//Append paragraph to text block
			$text = $text . $paragraph . "</p>";
		}

		return $text;
	}

}


