<?php 
// Initialize the seesion
// If you are using session_name("something"), don´t forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it´s desired to kill the session, also delete the session cookie.
// Note: the wil destroy the session, and not just the session data!
if(ini_get("session.use_cookies")){

	$param = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000,
		$param['path'], $param['domain'],
		$param['secure'], $param['httponly']
);

}
// Finally, destroy the session.
session_destroy();
 ?>