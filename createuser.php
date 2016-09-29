<?php 

include_once 'dbcon.php';
// Create new user
// pw(password) = from create user form
// $pwHash = password_hash($pw, PASSWORD_DEFAULT); // store in db 
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('something went wrong');
$password = filter_input(INPUT_POST, 'password') or die('pw missing');
$phash = password_hash($password, PASSWORD_DEFAULT);
//echo $phash;
//echo $email;

$sql = 'insert into user(email, password) values (?,?)';

	$stmt = $link->prepare($sql); 
	$stmt->bind_param('ss', $email, $phash);
	$stmt->execute();


?>