<?php
$logged_in = is_logged_in();
// if statement
if ($logged_in) {
	//echo 'hi there';
}

// if else statement
if ($logged_in) {
	//echo 'hi there user';
} else {
	//echo 'hi there guest';
}

$a = 90;
$b = 100;
$c = 10;
$d = 3;

// if elseif else statement
if ($a > $b) {
	echo 'hey b';
} else if($a > $d) {
	echo 'hey d';
} else if($a > $c) {
	echo 'hey c';
} else {
	echo 'not meet all requirement';
}

// switch statement
switch ($logged_in) {
	case true:
		echo 'yeah!';
		break;
	case false:
		echo 'not logged in. redirecting..';
		break;
	default:
		echo 'er...';
		break;
}

function is_logged_in() {
	// do something about authentication
	return true;
}
