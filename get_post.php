<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "blogdb";

    //connect
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));

    //select posts
    $query = $pdo->prepare("select * from posts");

	$query->execute();
	while($post = $query->fetch(PDO::FETCH_ASSOC)){ //gets row as json
	echo json_encode($post);
	}
?>