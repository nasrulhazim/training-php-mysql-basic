<?php
/* Start a session */
session_start();


/*

1. username & password received from form
2. check with db
3. if return ok from,
	- start session
	- store user info in session
*/
$_SESSION['auth'] = false;
$_SESSION['user'] = [
	'id' => 14, 
	'username' => 'nasrulhazim', 
	'email' => 'nasrulhazim.m@gmail.com'
];

unset($_SESSION['user']);
