<?php

$db_name = "sakhile";
$username = "root";
$password = "s@kh!lE22";
$server_name = "localhost";

$connection = mysqli_connect($server_name, $username, $password, $db_name);

if ($connection){
	echo "connected!";
} else {
	echo "not connected!";
}
?>
