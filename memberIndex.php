<?php
	require('header.php');
	require('createDB.php');
?>

<?php
	if(isset($_GET['submit'])){
		if($_GET['submit'] == "support-success"){
			echo '<div class="alert alert-success"><strong>Support Submission was Sent!</strong> Please allow 48 hours for a response.</div>';
		}
		if($_GET['submit'] == "support-failed"){
			echo '<div class="alert alert-danger"><strong>Something went wrong</strong> Please try Support form again.</div>';
		}
		if($_GET['submit'] == "feature-success"){
			echo '<div class="alert alert-success"><strong>New Feature Submission was Sent!</strong> Please allow 48 hours for a response.</div>';
		}
		if($_GET['submit'] == "feature-failed"){
			echo '<div class="alert alert-success"><strong>Something went wrong</strong> Please try Feature Request again</div>';
		}
	}
 ?>

<div class="jumbotron vertical-center" id="home">

	<h1 class="display-3">Hello, <?php echo $_SESSION['userFirstName'] ?>!</h1>
	<p><small>Go through your day quacking!</small></p>
	<hr class="m-y-2">
	<p class="lead">This mobile app is the first of its kind helping you get through you busy day.  The last thing you would want to do is to look down to a crowded busy looking calendar.  Ducky Calendars simplifies your day by a simple yet information daily schedule. </p>
</div>




<?php
	require('footer.php');
 ?>
