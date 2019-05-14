<?php
	session_start();

	$servername = "localhost";
	$username = "kevinnguyen";
	$password = "kevinnguyen";
	$conn = new mysqli($servername,$username,$password);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	if(isset($_POST['feature-submit'])){
		$memberID = $_SESSION['userId'];
		$request = trim($_POST['featureRequest']);

		$featureRequestQuery = "INSERT INTO duckySupport.feature(memberID,request) VALUES('$memberID','$request')";
		if($conn->query($featureRequestQuery) === TRUE){
			header("Location: ./memberIndex.php?submit=feature-success");
			exit();
		}else{
			header("Location: ./memberIndex.php?submit=feature-failed");
		}

	}


 ?>
