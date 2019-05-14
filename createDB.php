<?php

$servername = "localhost";
$username = "kevinnguyen";
$password = "kevinnguyen";
$dbname = "duckySupport";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$DBsql = "CREATE DATABASE IF NOT EXISTS duckySupport";
if($conn->query($DBsql) === TRUE){
	// echo "Database created sucessfully ";
}else{
	echo $conn->error;
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
	// echo "Contact table created successfully ";
}else{
	echo $conn->error;
	echo '<div class="alert alert-danger">Contact table failed to create</div>';
}

$membersTable = "CREATE TABLE IF NOT EXISTS members(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	UNIQUE KEY unique_email(email)
)";
if ($conn->query($membersTable) === TRUE){
	// echo "Members table created successfully ";
}else{
	echo mysqli_errno($conn);
	echo '<div class="alert alert-danger">Members table failed to create</div>';
}

$featureRequestTable = "CREATE TABLE IF NOT EXISTS feature(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	memberID INT(6) NOT NULL,
	request TEXT NOT NULL
)";
if ($conn->query($featureRequestTable) === TRUE){
	// echo "Feature table created successfully ";
}else{
	echo mysqli_errno($conn);
	echo '<div class="alert alert-danger">Feature table failed to create</div>';
}

$supportTable = "CREATE TABLE IF NOT EXISTS support(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	memberID INT(6) NOT NULL,
	prob_cat VARCHAR(30) NOT NULL,
	prevent VARCHAR(30) NOT NULL,
	iosV VARCHAR(30) NOT NULL,
	appV VARCHAR(30) NOT NULL
)";
if ($conn->query($supportTable) === TRUE){
	// echo "Support table created successfully ";
}else{
	echo mysqli_errno($conn);
	echo '<div class="alert alert-danger">Support table failed to create</div>';
}


$conn->close();

 ?>
