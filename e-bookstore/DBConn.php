<?php

	$server = 'localhost';
	$name = 'root';
	$password = '';
	$db = 'bookstore';

	$conn = mysqli_connect ($server, $name, $password);

	if(!$conn){
		echo '<script>alert("Connection failed: " . mysqli_connect_error()")</script>';
		die ('Could not connect: '.mysql_error());
	}
	$selectDB = mysqli_select_db($conn,$db);


	//if the database does not exist 
	if(!$selectDB){
		$sql_statement = "CREATE DATABASE ".$db. "";
		$createDB = mysqli_query($conn,$sql_statement);
		echo '<script>alert("Database".$db. " created")</script>';


	}else{
		echo '<script>alert("Database ".$db. " exists")</script>';
	}
	$conn = mysqli_connect ($server, $name, $password,$db);

?>