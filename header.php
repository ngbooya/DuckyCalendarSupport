<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
		<title>The Duck</title>
		<link href="style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	</head>
	<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">
				<img src="calendar.png" alt="">
			</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		   	<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="container-fluid" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href=
						<?php
						 	if(!isset($_SESSION['userFirstName'])){
								echo "index.php";
							}else if(isset($_SESSION['userFirstName'])){
								echo "memberIndex.php";
							}

						?>
						>Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="contact.php">
							<?php
								if(!isset($_SESSION['userFirstName'])){
									echo "Contact Us";
								}
							 ?>
						</a>
		      </li>
					<li class="nav-item">
		        <a class="nav-link" href="featureRequest.php">
							<?php
								if(isset($_SESSION['userFirstName'])){
									echo "Request Feature";
								}
							 ?>
						</a>
		      </li>
					<li class="nav-item">
		        <a class="nav-link" href="support.php">
							<?php
								if(isset($_SESSION['userFirstName'])){
									echo "Support";
								}
							 ?>
						</a>
		      </li>
		    </ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<a class="nav-link" href="logout.php">
							<?php
								if(isset($_SESSION['userFirstName'])){
									echo "Logout";
								}
							?>
						</a>
					</li>
				</ul>
		  </div>
		</nav>
	</header>
