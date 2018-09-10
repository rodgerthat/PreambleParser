<?php
/**
 * Created by PhpStorm.
 * User: Joel R. Norris
 * Date: 9/9/18
 * Time: 5:43 PM
 * PHP Version: 7.2
 * Filename: PreambleParser.php
 * Description: A simple class designed to parse text and return a count of words
 *  based on the first and last letter of each word.
 */

namespace CodeChallenge;


class PreambleParser {

	/**
	 * @var string
	 */
	private $_textToParse = "
		We the People of the United States, in Order to form a more perfect Union,
		establish Justice, insure domestic Tranquility, provide for the common defence,
		promote the general Welfare, and secure the Blessings of Liberty
		to ourselves and our Posterity, do ordain and establish
		this Constitution for the United States of America.
	";
	private $_beginsWith = FALSE;
	private $_beginsWithCount = 0;
	private $_endsWith = FALSE;
	private $_endsWithCount = 0;
	private $_beginsWithandEndsWithCount = 0;

	private $_beginsWithChar = 't';
	private $_endsWithChar = 'e';

	private $_textToParseWords = [];

	/**
	 * PreambleParser constructor.
	 */
	function __construct() {
		// do nothing, use the internal properties as they exist predefined.
	}

	/**
	 * PreambleParser constructor.
	 *
	 * @param string $textToParse
	 * @param string $beginsWithChar
	 * @param string $endsWithChar
	 */
	function __construct1( string $textToParse, string $beginsWithChar = 't', string $endsWithChar = 'e' ) {

		// assign incoming parameters to class properties
		if (!is_null($textToParse)) {
			$this->_textToParse = $textToParse;
		}
		$this->_beginsWithChar = $beginsWithChar;
		$this->_endsWithChar = $endsWithChar;

	}

	/**
	 * parsePreamble
	 *
	 *
	 */
	public function parsePreamble() {

		/**
		 * str_word_count()
		 * @param string $string : The string to count the words in
		 * @param $format: Specify the return value of this function. The current supported values are:
		 *  0 - Return only the number of words;
		 *  1 - Return an array;
		 *  2 - Return an associative array;
		 * @param $charlist : A list of additional characters which will be considered as 'word'
		 * @return mixed : Returns an array or an integer, depending on the format chosen.
		 */
		$this->_textToParseWords = str_word_count($this->_textToParse, 1 );    // take all the words in the string and put them in an array

		// loop through array of words,
		foreach($this->_textToParseWords as $word) {

			// does is start with the defined character?
			if ($word[0] == $this->_beginsWithChar) {

				// if so , increment the count and set a flag
				$this->_beginsWith = TRUE;
				++$this->_beginsWithCount;

			} else {

				$this->_beginsWith = FALSE;
			}

			// does it end with the defined character?
			if ($word[strlen($word)-1] == $this->_endsWithChar) {

				// if so , increment the count and set a flag
				$this->_endsWith = TRUE;
				++$this->_endsWithCount;

			} else {

				$this->_endsWith = FALSE;
			}

			// does it start with one and end with the other?
			if ($this->_beginsWith && $this->_endsWith) {
				// if yes, then increment the count
				++$this->_beginsWithandEndsWithCount;
			}

		}

		$this->printResults();

	}

	private function printResults() {

		// display results to the user
		printf("Text to parse : <br />");
		printf($this->_textToParse."<br />");
		printf( "Number of words that begin with %s : %u <br />", $this->_beginsWithChar, $this->_beginsWithCount);
		printf( "Number of words that end with %s : %u <br />", $this->_endsWithChar, $this->_endsWithCount);
		printf("Number of words that begin with %s and end with %s : %u <br />", $this->_beginsWithChar, $this->_endsWithChar, $this->_beginsWithandEndsWithCount);

	}

}