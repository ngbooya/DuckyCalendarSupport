<?php
	require('header.php');
	require('createDB.php');
?>

<div class="jumbotron vertical-center" id="home">
	<h1 class="display-3">Welcome to Ducky Calendars</h1>
	<p><small>Go through your day quacking!</small></p>
	<hr class="m-y-2">
	<p class="lead">This mobile app is the first of its kind helping you get through you busy day.  The last thing you would want to do is to look down to a crowded busy looking calendar.  Ducky Calendars simplifies your day by a simple yet information daily schedule. </p>
</div>

	<div class="col-md-12 text-center">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signInModal">
		  Already a Member?
		</button>

		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#signUpModal">Sign Up!</button>
		</div>

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
				<form>
				  <div class="form-group" action="login.php",method="post">
				    <label for="memberEmail">Email address</label>
				    <input type="email" class="form-control" id="memberEmail" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

						<label for="memberPassword">Password</label>
				    <input type="password" class="form-control" id="memberPassword" placeholder="Password">
				  </div>
					<div class="col-md-12 text-center">
						<button type="submit" class="btn btn-primary" name="login-submit">Login</button>
					</div>

				</form>
      </div>
      <div class="modal-footer">
				<div class="col-md-10">
					<a href="signUp.php">Sign Up</a>
				</div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


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
					<div class="form-group">
						<label for="newMemberFirstName">First Name</label>
						<input type="text" name="newMemberFirstName" id="newMemberFirstName" placeholder="John">
					</div>
					<div class="form-group">
						<label for="newMemberLastName">Last Name</label>
						<input type="text" name="newMemberLastName" id="newMemberLastName" placeholder="Doe">
					</div>
				  <div class="form-group" >
				    <label for="newMemberEmail">Email Address</label>
				    <input type="email" class="form-control" name="newMemberEmail" id="newMemberEmail" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">This will be your username to log in.</small>
				  </div>
					<div class="form-group">
						<label for="newMemberPassword">Password</label>
				    <input type="password" class="form-control" name="newMemberPassword" id="newMemberPassword" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="newMemberConfirmPassword">Confirm Password</label>
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
