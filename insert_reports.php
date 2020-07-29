<?php
	require "connection.php";

	$report = $_POST["REPORT"];

	$query = "insert into reports (report) values('$report');";

	if ($connection->query($query) === TRUE){
		echo "report is inserted!";
	} else {
		echo "report not inserted!";
	}

	$connection->close();
?>