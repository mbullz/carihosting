<?php
	error_reporting(E_ALL);

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'carihosting';

	$mysqli = mysqli_connect($host, $username, $password, $dbname);

	if (!$mysqli) {
		echo 'Error: Unable to connect to MySQL. ' . mysqli_connect_errno() . '. ' . mysqli_connect_error();
		exit;
	}
?>
