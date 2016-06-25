<?php
$url = "mysql:host=localhost;dbname=inwabu_db";
	$username = "root";
	$password = "";

	try
	{
		$conn = new PDO($url, $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $ex)
	{
		echo "Connection failed ". $ex->getMessage();
	}
?>
