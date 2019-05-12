<?php
	require("header.php");
 ?>
 <div class="container">
 	<h1>Support!</h1>
 	<p>We will respond to you as soon as possible. Thank you for using Duck Calendars</p>

 	<form action="processSupport.php" method="post">
		<div class="form-group">
			<label for="prob_cat">Probelm Category</label>
			<select class="form-control form-control-sm" name="prob_cat" id="prob_cat">
				<option selected>What is the issue?</option>
				<option value="Application State">Application State</option>
				<option value="Connectivity">Connectivity</option>
				<option value="Billing">Billing</option>
				<option value="Other">Other</option>
			</select>
		</div>
		<div class="form-group">
			<label for="prob_cat">Is this issue preventing you from doing anything?</label>
			<div class="radio">
				<label><input type="radio" name="preventing" value="No">No</label>
				<label><input type="radio" name="preventing" value="Yes">Yes</label>
			</div>
		</div>
		<div class="form-group">
			<label for="operatingSys">What iOS Version on are you?</label>
			<div class="radio">
				<label><input type="radio" name="operatingSys" value="iOS 10">iOS 10</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="operatingSys" value="iOS 11">iOS 11</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="operatingSys" value="iOS 12">iOS 12</label>
			</div>
		</div>
		<div class="form-group">
			<label for="appVersion">What iOS Version on are you?</label>
			<div class="radio">
				<label><input type="radio" name="appVersion" value="Ducky 1.0.1">Ducky 1.0.1</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="appVersion" value="Ducky 1.0.2">Ducky 1.0.2</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="appVersion" value="Ducky 1.0.3">Ducky 1.0.3</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="appVersion" value="Ducky 2.0.1">Ducky 2.0.1</label>
			</div>
		</div>
		<button type="submit" class="btn btn-primary" name="support-submit">Send Message</button>
 	</form>
 </div>

 <?php
  	require("footer.php");
 ?>
