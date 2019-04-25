<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "duckySupport";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$DBsql = "CREATE DATABASE IF NOT EXISTS duckySupport";
if($conn->query($DBsql) === TRUE){
	echo "Database created sucessfully";
}else{
	echo "Error creating database/Database already exist: " . $conn->error;
}

$conn->query("USE duckySupport");

$contactTable = "CREATE TABLE IF NOT EXISTS contactUs(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	discover VARCHAR(50),
	message TEXT NOT NULL
)";

if ($conn->query($contactTable) === TRUE){
	echo "Contact table created successfully";
}else{
	echo "Error creating table: " . $conn->error;
}


$conn->close();

 ?>
