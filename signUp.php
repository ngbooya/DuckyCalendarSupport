<?php
$servername = "localhost";
$username = "kevinnguyen";
$password = "kevinnguyen";

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
		header("Location: ./index.php?error=emptyfields&name");
		exit();
	}else if($password != $confirmPassword){
		header("Location: ./index.php?error=passwordsmismatch");
		exit();
	}else{
		$hashpassword = md5($password);
		$insertNewMember = "INSERT INTO duckySupport.members (firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$hashpassword')";

		if($conn->query($insertNewMember) === TRUE){
			header("Location: ./index.php?submit=signup-success");
			exit();
		}else if(mysqli_errno($conn) == 1062){
			header("Location: ./index.php?error=duplicate-email");
			exit();
		}else{
			echo mysqli_errno($conn);
		}
	}
}else{
	header("Location: ./index.php");
	exit();
}










 ?>
