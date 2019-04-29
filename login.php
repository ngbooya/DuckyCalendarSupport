<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login-submit'])){
	$loginEmail = trim($_POST['memberEmail']);
	$loginPassword = trim($_POST['memberPassword']);



	if(empty($loginEmail) || empty($loginPassword)){
		header("Location: ./index.php?error=emptyfields");
		exit();
	}else{
		$LOGIN = "SELECT * FROM duckySupport.members WHERE email='$loginEmail'";
		$result = mysqli_query($conn,$LOGIN);
		$row = mysqli_fetch_assoc($result);
		if(md5($loginPassword) == $row['password']){

			session_start();
			$_SESSION['userId'] = $row['id'];
			$_SESSION['userFirstName'] = $row['firstname'];
			header("Location: ./memberIndex.php?credentials=valid");
			exit();
		}else{
			header("Location: ./index.php?credentials=invalid");
			exit();
		}
	}

}else{
	header("Location: ./index.php?login-submit=failed");
	exit();
}

 ?>
