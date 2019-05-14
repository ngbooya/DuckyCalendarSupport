<?php
	session_start();
	$servername = "localhost";
	$username = "kevinnguyen";
	$password = "kevinnguyen";
	$conn = new mysqli($servername,$username,$password);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}


	if(isset($_POST['changeinfo-submit'])){
		$currentUser = $_SESSION['userFirstName'];
		$currentID = $_SESSION['userId'];

		$newFirstName = trim($_POST['changeFirstName']);
		$newLastName = trim($_POST['changeLastName']);

		$newEmail = trim($_POST['changeEmail']);
		$emailArray = array($newEmail,"gmail.com");
		$wholeEmail = implode("@",$emailArray);

		// echo $newFirstName . $newLastName . $wholeEmail . $currentID . $_SESSION['userId'] . $_SESSION['userFirstName'];
		$changeQuery = "UPDATE duckySupport.members SET firstname='$newFirstName',lastname='$newLastName',email='$wholeEmail' WHERE id='$currentID'";
		if($conn->query($changeQuery) === TRUE){
			$_SESSION['userFirstName'] = $newFirstName;
			header("Location: ./changeInfo.php?submit=change-success");
			exit();
		}else{
			header("Location: ./changeInfo.php?submit=change-query-failed");
			exit();
		}

	}else{
		header("Location: ./changeInfo.php?submit=change-failed");
		exit();
	}

 ?>
