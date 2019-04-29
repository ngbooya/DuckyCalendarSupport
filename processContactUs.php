
<?php
	require('header.php');
	$servername = "localhost";
	$username = "root";
	$password = "root";

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	$discover = trim($_POST['discover']);

	$conn = new mysqli($servername, $username, $password);

	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

	$conn->query("USE duckySupport");

	$insertContact = "INSERT INTO contactUs (name, email, discover,message) VALUES('$name','$email','$discover','$message')";

	if($conn->query($insertContact) === TRUE){
		// <div class="alert alert-success" role="alert">Thank you for reaching out to us.  We will get back to you soon.</div>
		$conn->close();
		header('Location: index.php?submit=contactus-success');
		exit;

	}else{
		$conn->close();
		echo "ERROR " . $insertContact . "<br>" . $conn->error;
	}


 ?>


 <?php
	require('footer.php');
	?>
