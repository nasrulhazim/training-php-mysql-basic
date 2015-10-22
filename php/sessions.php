<?php

/* Session */
var_dump($_SESSION);
/* Start a session */
if(is_session_started() == FALSE) {
	session_start();
}

/* Create Session */
$_SESSION['user'] = ['id' => 14, 'username' => 'nasrulhazim', 'email' => 'nasrulhazim.m@gmail.com'];

/* Delete Session */
unset($_SESSION['user']);

/* End a Session */
session_unset();
session_destroy();

/* Check if Session is started or not */
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}