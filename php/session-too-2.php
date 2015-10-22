<?php 

session_start();

// if(isset($_SESSION['auth']) && !$_SESSION['auth']) {
// 	echo 'invalid user';
// }
echo $_SESSION['user']['email'];

var_dump($_SESSION);