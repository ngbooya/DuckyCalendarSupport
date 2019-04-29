<?php
	require("header.php");
 ?>
 <div class="container">
 	<h1>You have an idea?</h1>
 	<p>Our team strives to better your life by implementing the best features.  Please share your ideas!</p>

 	<form action="processFeatureRequest.php" method="post">
		<div class="form-group">
		 </label>
		<textarea name="featureRequest" rows="8" cols="107"></textarea>
		</div>
		<button action="index.php" type="submit" class="btn btn-primary" name="feature-submit">Send Message</button>
 	</form>
 </div>

 <?php
  	require("footer.php");
 ?>
