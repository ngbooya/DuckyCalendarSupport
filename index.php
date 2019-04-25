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
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
		  Already a Member?
		</button>
	</div>

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <!-- <div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div> -->
					<div class="col-md-12 text-center">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>

				</form>
      </div>
      <div class="modal-footer">
				<div class="col-md-10">
					<a href="signup.php">Sign Up</a>
				</div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<?php
	require('footer.php');
 ?>
