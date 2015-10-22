<?php
	$txt = "i'm a string!"; // String
	
	$x = 1; // Number
	
	$y = 2.6; // Decimal / Float
	
	$array = array('i','am','array'); // Array

	// Available in PHP version > 5.3
	$array_too = ['i','am','array','too']; // Array

	$users = ['nasrul','hazim','bin','mohamad'];
	
	$got_money = true; // Boolean
	$empty_pocket = false; // Boolean

	/* Display variable value */
	$txt = "PHP";
	echo "I love $txt!<br>";
	echo "I love " . $txt . "!<br>";
	echo $x + $y . '<br>';

	echo 'Got money? '. $got_money . '<br>';
	echo 'Empty pocket? ' . $empty_pocket . '<br>';


?>