<?php

	require 'functions.php';
/* Reference: http://www.w3schools.com/php/php_ref_filter.asp */

// filter_var(var, type);

/*
Why filter? External Input
	User input from a form
	Cookies
	Web services data
	Server variables
	Database query results

*/
	// remove html elements
	$str = "<h1>Hello World!</h1><script>alert('hey ya');</script>";
	$newstr = filter_var($str, FILTER_SANITIZE_STRING);
	p($newstr);

	// check if the variable $int is an integer
	$int = '100asd';

	echo is_int($int) . '<br>';

	if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
	    p("Integer is valid");
	} else {
	    p("Integer is not valid");
	}

	/*
	Sanitize
	*/
	$a = 'joe@example.org';
	$b = 'bogus - at - example dot org';
	$c = '(&^%*&%*bogus@example.org)';

	$sanitized_a = filter_var($a, FILTER_SANITIZE_EMAIL);
	if (filter_var($sanitized_a, FILTER_VALIDATE_EMAIL)) {
	    echo "This (a) sanitized email address is considered valid.<br>";
	}

	$sanitized_b = filter_var($b, FILTER_SANITIZE_EMAIL);
	if (filter_var($sanitized_b, FILTER_VALIDATE_EMAIL)) {
	    echo "This sanitized email address is considered valid.";
	} else {
	    echo "This (b) sanitized email address is considered invalid.<br>";
	}

	$sanitized_c = filter_var($c, FILTER_SANITIZE_EMAIL);
	if (filter_var($sanitized_c, FILTER_VALIDATE_EMAIL)) {
	    echo "This (c) sanitized email address is considered valid.<br>";
	    echo "Before: $c<br>";
	    echo "After:  $sanitized_c<br>";    
	}

?>
