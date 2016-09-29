<?php
/*
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = 'root';
const DB_NAME = 'phplogin';

$link = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
if ($link->connect_error) {
	die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
	$link->set_charset('utf8');
	*/
?>

<?php 
const DB_HOST = '';
const DB_USER = '';
const DB_PASS = '';
const DB_NAME = '';

$link = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
if ($link->connect_error) {
	die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
	$link->set_charset('utf8');

 ?>
