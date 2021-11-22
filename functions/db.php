<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "book_store";
	$conn = mysqli_connect($host, $user, $pass, $dbname);
	if (!$conn) {
		echo 'Failed to connect with database';
	}
 ?>