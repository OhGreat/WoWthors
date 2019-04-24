<?php

function connectdb() {

	$servername = "localhost";
	$username 	= "Dimitrios";
	$password 	= "";
	$database 	= "data";

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
