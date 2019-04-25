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
		echo "New record created sucessfully";

	}else{
		echo "ERROR " . $insertContact . "<br>" . $conn->error;
	}

	$conn->close();
 ?>
<div class="modal fade" id=contactConfirmation tabindex="-1" role="dialog">
	<div class="model-dialog">
		<div class="model-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
			</div>
		</div>

	</div>

</div>



 <?php
	require('footer.php');
	?>
