<?php

date_default_timezone_set("Europe/Moscow");

$db_username        = 'root';
$db_password        = 'usbw';
$db_name            = 'blanks';
$db_host            = 'localhost';

$con = mysqli_connect($db_host,$db_username,$db_password,$db_name);
mysqli_set_charset ( $con , 'utf8' );

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	
}
?>