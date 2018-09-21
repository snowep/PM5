<?php
	$server = "localhost";
	$username = "root";
	$password = "";

	try {
		$conn = new PDO("mysql:host=localhost;dbname=asset_pln",'root','');
	}
	catch(PDOException $e) {
		echo "connection failed:" . $e->getMessage();
	}
?>
