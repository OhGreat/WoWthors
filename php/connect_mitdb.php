<?php

function connectdb() {

	$servername = "localhost";
	$username = "root";
	$password = "HelloFriend0106";
	$database = "test_db";

	try {
    	$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	echo "Connected succesfully";
	}
	catch(PDOException $e) {
	    echo "Connection failed: " . $e->getMessage();
	}
}

?>