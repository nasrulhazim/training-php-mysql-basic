<?php
	/** 
	 * Variable Scope consist of global, local and static 
	 */

	/* Global Scope */
	$x = 1;
	$y = 2;

	/* Accessing Global Scope */
	function summation() {
		global $x; // global variable
		$y = 10; // local variable

		echo $x + $y . '<br>';
		echo $GLOBALS['x'] + $y .'<br>';
	}

	//summation();

	//echo $x + $y;

	/* Static Scope */
	function increase($value) {
		static $x = 1.9;
		$x = $value + $x;
		echo $x.'<br>';
	}

	function increase2($value) {
		$x = 1.9;
		$x = $value + $x;
		echo $x.'<br>';
	}

	increase(0.2);
	increase(4);
	increase(1);
	echo '<hr>';
	increase2(0.2);
	increase2(4);
	increase2(1);
?>