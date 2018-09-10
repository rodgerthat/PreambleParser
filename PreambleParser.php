<?php
/**
 * Created by PhpStorm.
 * User: joelrnorris
 * Date: 9/9/18
 * Time: 5:43 PM
 * PHP Version: 7.2
 * Filename: PreambleParser.php
 * Description: A simple class designed to parse text and return a count of words
 *  based on the first and last letter of each word.
 */

declare(strict_types=1);
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
	private $_endsWith = FALSE;
	private $_beginsWithandEndsWith = FALSE;
	private $_upperAndLowerCase = TRUE;

	private $_beginsWithChar = 't';
	private $_endsWithChar = 'e';

	/**
	 * PreambleParser constructor.
	 *
	 * @param string $textToParse
	 * @param string $beginsWithChar
	 * @param string $endsWithChar
	 * @param bool $upperAndLowerCase
	 */
	function __construct( string $textToParse, string $beginsWithChar = 't', string $endsWithChar = 'e', bool $upperAndLowerCase = TRUE ) {

		// assign incoming parameters to class properties
		if (!is_null($textToParse)) {
			$this->_textToParse = $textToParse;
		}
		$this->_beginsWithChar = $beginsWithChar;
		$this->_endsWithChar = $endsWithChar;
		$this->_upperAndLowerCase = $upperAndLowerCase;

	}

	/**
	 * parsePreamble
	 *
	 *
	 */
	public function parsePreamble() {

		


	}

}