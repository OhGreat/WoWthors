<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "data";

	try {
    	$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
	    echo "Connection failed: " . $e->getMessage();
	}

	$stmt = $conn->prepare("SELECT * FROM books");
	$stmt->execute();

	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

	echo   "<link rel='stylesheet' type='text/css' href='css/booksPage.css' />";
	foreach ($stmt as $elem) {
		echo "<div class='book'>";
		echo "<h3>" . $elem['title'] . "</h3>" ;
		echo "<p>" . nl2br($elem['review']) . "</p>";
		echo $elem['date'] . '\n';
		echo '</div>';
	}

?>
