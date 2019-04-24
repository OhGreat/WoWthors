<?php

$pdo->prepare('SELECT * FROM users WHERE username= :username');
$pdo->execute(array(':username' => $_GET['username']));

?>
