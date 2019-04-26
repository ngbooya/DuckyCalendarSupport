<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['signup-submit'])){
	$firstname = trim($_POST['newMemberFirstName']);
	$lastname = trim($_POST['newMemberLastName']);
	$email = trim($_POST['newMemberEmail']);
	$password = trim($_POST['newMemberPassword']);
	$confirmPassword = trim($_POST['newMemberConfirmPassword']);

	if(empty($firstname) || empty($lastname) || empty($email)){
		header("Location: ./index.php?error=emptyfields&name" . $firstname . $lastname ."&email=".$email);
		exit();
	}else if($password != $confirmPassword){
		header("Location: ./index.php?error=passwordsmismatch&name" . $firstname . $lastname ."&email=".$email);
		exit();
	}else{
		$hashpassword = md5($password);
		$insertNewMember = "INSERT INTO duckySupport.members (firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$hashpassword')";

		if($conn->query($insertNewMember) === TRUE){
			echo "User creation is successful!!";
		}else{
			echo "ERROR" . $insertNewMember . "<br>" . $conn->error;
		}
	}
}










 ?>
