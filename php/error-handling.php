<?php

/* Reference: http://www.w3schools.com/php/php_error.asp */

$file=fopen("welcome.txt","r");

set_error_handler("customError");

function customError($errno, $errstr) {
	echo '<h3>Error No.'.$errno.'</h3>';
	echo '<p>'.$errstr.'</p>';
}

echo($test);

$test = 1.6;
if ($test < 2.6) {
  trigger_error("Value must be 2.6 or more");
}