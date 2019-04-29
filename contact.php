<?php
	require('header.php');
?>

<div class="container">
	<h1>Contact us!</h1>
	<p>We will respond to you as soon as possible. Thank you for using Duck Calendars</p>



	<form action="processContactUs.php" method="post">
		<div class="text-right">
			<button action="index.php" type="submit" class="btn btn-primary">Send Message</button>
		</div>
		<div class="form-group">
			<label for="name">Your Name: </label>
			<input type="name" class="form-control" name="name" id="name" placeholder="Enter name">
			<small>First and Last Name</small>
		</div>
		<div class="form-group">
			<label for="email">Your Email: </label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="color">How did you know about us?</label>
			<select class="form-control form-control-sm" name="discover" id="color">
				<option value="NA">NA</option>
				<option value="From a friend">From a friend</option>
				<option value="Youtube Ad">Youtube Ad</option>
				<option value="App Store Suggestion">App Store Suggestion</option>
				<option value="Other">Other</option>
			</select>
		</div>

		<div class="form-group">
			<label for="textarea">Enter Message Here:</label>
			<textarea class="message" name="message" rows="8" cols="107">Greetings...</textarea>
		</div>

	</form>
</div>

<?php
	require('footer.php');
 ?>
