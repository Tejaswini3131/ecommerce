<?php
	try {
		//Creating connection for mysql
		$conn = new PDO("mysql:host=localhost;dbname=corpcfogrp", 'root', '');
		// error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    }
	catch(PDOException $e)
	{
	echo "Connection failed: " . $e->getMessage();
	}

	$connect = mysqli_connect("localhost", "root", "","corpcfogrp");

?>





