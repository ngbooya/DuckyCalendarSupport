<?php
	require('header.php');
	require('createDB.php');
?>
<?php
if(isset($_GET['submit'])){
	if($_GET['submit'] == "signup-success"){
		echo '<div class="alert alert-success"><strong>Thank you for join Ducky</strong> Have a nice day! </div>';
	}
	if($_GET['submit'] == "contactus-success"){
		echo '<div class="alert alert-success"><strong>Thank you for contacting us!</strong> Please expenct a response in 48 hours.</div>';
	}

}
 ?>

<div class="jumbotron vertical-center" id="home">

	<h1 class="display-3">Welcome to Ducky Calendars <?php echo $_SESSION['userFirstName'] ?></h1>
	<p><small>Go through your day quacking!</small></p>
	<hr class="m-y-2">
	<p class="lead">This mobile app is the first of its kind helping you get through you busy day.  The last thing you would want to do is to look down to a crowded busy looking calendar.  Ducky Calendars simplifies your day by a simple yet information daily schedule. </p>
</div>

	<div class="col-md-12 text-center">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signInModal">
			Already a Member?
		</button>

		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#signUpModal">
			Sign Up!
		</button>
	</div>

<!-- Member sign in pop up -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="memberLogin">Ducky Members</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<form action="login.php" method="post">
				  <div class="form-group">

				    <label for="memberEmail">Email address</label>

				    <input type="email" class="form-control" name="memberEmail" id="memberEmail" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
					<div class="form-group">
						<label for="memberPassword">Password</label>
				    <input type="password" class="form-control" name="memberPassword" id="memberPassword" placeholder="Password">
					</div>
					<div class="col-md-12 text-center">
						<button type="submit" class="btn btn-primary" name="login-submit">Login</button>
					</div>

				</form>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Non Member sign up pop up  -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="memberLogin">Let's start quacking!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<form action="signUp.php" method="post">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="newMemberFirstName">First Name</label>
							<input type="text" name="newMemberFirstName" id="newMemberFirstName" placeholder="John">
						</div>
						<div class="form-group col-md-6">
							<label for="newMemberLastName">Last Name</label>
							<input type="text" name="newMemberLastName" id="newMemberLastName" placeholder="Doe">
						</div>
					</div>
				  <div class="form-group" >
				    <label for="newMemberEmail">Email Address</label>
						<?php
						if(isset($_GET['error'])){
							if($_GET['error'] == "duplicate-email"){
								echo "<script>$('#signUpModal').modal('show')</script>";
								// echo "<p><small>Email already in use</small></p>";
								echo '<div class="alert alert-danger">Email is already in use!</div>';
							}

						}

						 ?>
				    <input type="email" class="form-control" name="newMemberEmail" id="newMemberEmail" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">This will be your username to log in.</small>
				  </div>
					<div class="form-group">
						<label for="newMemberPassword">Password</label>
						<?php
						if(isset($_GET['error'])){
							if($_GET['error'] == "passwordsmismatch"){
								echo "<script>$('#signUpModal').modal('show')</script>";
								echo '<div class="alert alert-danger"><small>Password is not matching!</small></div>';
							}
						}
						 ?>

				    <input type="password" class="form-control" name="newMemberPassword" id="newMemberPassword" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="newMemberConfirmPassword">Confirm Password</label>
						<?php
						if(isset($_GET['error'])){
							if($_GET['error'] == "passwordsmismatch"){
								echo "<script>$('#signUpModal').modal('show')</script>";
								echo '<div class="alert alert-danger"><small>Password is not matching!</small></div>';
							}
						}
						 ?>
				    <input type="password" class="form-control" name="newMemberConfirmPassword" id="newMemberConfirmPassword" placeholder="Password">
					</div>
					<div class="col-md-12 text-center">
						<button type="submit" class="btn btn-primary" name="signup-submit">Join the Duck!</button>
					</div>

				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<?php
	require('footer.php');
 ?>
