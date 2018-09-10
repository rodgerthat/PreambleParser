<?php
/**
 * Created by PhpStorm.
 * User: Joel R. Norris
 * Date: 9/9/18
 * Time: 8:02 PM
 * php ver: 7.2
 * Run > php -S localhost:8000
 */

declare(strict_types=1);
include_once ('PreambleParser.php');

$preambleParser = new \CodeChallenge\PreambleParser();

$preambleParser->parsePreamble();

