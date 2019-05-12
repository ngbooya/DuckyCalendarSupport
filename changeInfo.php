<?php
	require("header.php");
 ?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername,$username,$password);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	$name = $_SESSION['userFirstName'];

	$showName = "SELECT * FROM duckySupport.members WHERE firstname='$name'";
	// //
	$result = mysqli_query($conn,$showName);
	$row=mysqli_fetch_assoc($result);

	// echo $row['firstname'];
	$currentFirstName = $row['firstname'];
	// echo $row['lastname'];
	$currentLastName = $row['lastname'];
	// echo $row['email'];
	$currentEmail = $row['email'];

	$emailHost = preg_split("/@/", $currentEmail);

 ?>

<?php
	if(isset($_GET['submit'])){
		if($_GET['submit'] == "change-success"){
			echo '<div class="alert alert-success"><strong>Info Updated!</strong> Welcome!</div>';
		}
	}
 ?>

<div class="container">
	<h1 class="display-1"><?php echo $currentFirstName . " " . $currentLastName; ?></h1>
	<h1 class="display-4"><?php echo $currentEmail; ?></h1>

	<form action="processChangeInfo.php" method="post">
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
		      <span class="input-group-text">Change Name</span>
		    </div>
				<input type="text" class="form-control" placeholder="First Name" name="changeFirstName">
				<input type="text" class="form-control" placeholder="Last Name" name="changeLastName">
		  </div>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" name="changeEmail">
			  <div class="input-group-append">
			    <span class="input-group-text" id="basic-addon2">@<?php print_r($emailHost[1]) ?></span>
			  </div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary btn-sm btn-block" name="changeinfo-submit">Change your Info!</button>
	</form>
</div>


<?php
	require('footer.php');
 ?>
