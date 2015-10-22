<?php
$x = 1; // type of int
$y = '4'; // type of string
// Arithmetic operators
// d('Penambahan: ' . ($x + $y) );
// d('Penolakan: ' . ($x - $y) );
// d('Pendaraban: ' . $x * $y);
// d('Pembahagian: ' . number_format( ($x / $y), 2 ));
// d('Modulus: ' . $x % $y);

// d(number_format(1.23456546, 5));

// Assignment operators
// d($x+=$y);
// d($x-=$y);
// d($x*=$y);
// d($x/=$y);
// d($x%=$y);

// Comparison operators
// d('equal? ' . ($x == $y) );
// d('identical?' . ($x === $y) );
// d('not equal?' . ($x != $y) );
// d('not equal?' . ($x <> $y) );

// Increment/Decrement operators
// d($x++);
// d($x+2);
// d($x+10);
// d($x+1000);
// d(++$x);
// d($x--);
// d(--$x);

// Logical operators
if($x > $y or $x < 10) {
	echo 1;
} else {
	echo 0;
}


// String operators
// Array operators

function d($value) {
	echo $value . '<br>';
}

?>