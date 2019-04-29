<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername,$username,$password);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	if(isset($_POST['support-submit'])){
		$memberID = $_SESSION['userId'];
		$prob_cat = trim($_POST['prob_cat']);
		$prevent = trim($_POST['preventing']);
		$optSys = trim($_POST['operatingSys']);
		$appVersion = trim($_POST['appVersion']);

		echo "This is from user ID: ". $_SESSION['userFirstName'] ." ". $_SESSION['userId'];
		echo $prob_cat.$optSys.$appVersion;

		$supportQuery = "INSERT INTO duckySupport.support (memberID, prob_cat,prevent,iosV,appV) VALUES('$memberID','$prob_cat','$prevent','$optSys','$appVersion')";

		if($conn->query($supportQuery) === TRUE){
			header("Location: ./memberIndex.php?submit=support-success");
			exit();
		}else{
			echo $conn->connect_error;
			header("Location: ./memberIndex.php?submit=support-failed");
			exit();

		}

	}else{
		echo "ERROR";
	}

 ?>
