<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lazy Lunker Lodge</title>
      <!-- Normalize CSS -->
			<link href="css/normalize.css" rel="stylesheet" media="screen">
      <!-- Reset the viewport -->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Link to main stylesheet -->
			<link href="css/style.css" rel="stylesheet" media="screen">
      <!-- Link to style sheet for smaller window sizes -->
			<link href="css/small.css" rel="stylesheet" media="screen and (max-width: 480px)">
      <!-- Link to style sheet for medium window sizes -->
			<link href="css/medium.css" rel="stylesheet" media="screen and (min-width: 481px) and (max-width: 1024px)">
      <!-- Link to style sheet for large window sizes -->
			<link href="css/large.css" rel="stylesheet" media="screen and (min-width: 1025px)">
			<link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet">
  </head>
	<body>
		<div id="container">
			<header>
				<h1>Lazy Lunker Lodge</h1>
				<nav>
					<ul>
						<li><a href="index.html" title="Go to the home page">Home</a></li>
						<li><a href="accomodations.html" title="Go to the accomodations page">Accomodations</a>
							<ul>
								<li><a href="cabin1.html" title="Go to the cabin 1 section">Cozy Rustic Cabin</a></li>
								<li><a href="cabin2.html" title="Go to the cabin 2 section">Large Family Cabin</a></li>
								<li><a href="cabin3.html" title="Go to the cabin 3 section">Luxury Cabin</a></li>
							</ul>
						</li>
						<li><a href="activities.html" title="Go to the activities page">Activities</a></li>
						<li><a href="reservations.html" class="active" title="Go to the reservations page">Reservations</a></li>
						<li><a href="contact.html" title="Go to the contact page">Contact</a></li>
					</ul>
				</nav>
			</header>
		</div>
		<div class="under-header">
			<img class="topimg" src="img/landscape.png" alt="Lake and trees landscape">
			<h2>Lazy Lunker Lodge Reservations</h2>
		</div>
		<main>
			<div id="confirmation" class="banner">
				<h3>Reservation Complete!</h3>
				<?php
					$fname = $_GET['fname'];
					$cabin = $_GET['cabin-choice'];
					$datein = $_GET['check-in'];
					$guestnum = $_GET['guests'];
					// Output a dynamic message to confirm that reservation was completed
					echo('<p class="msg">Thanks for booking your stay, '.$fname.'.</p>');
					echo('<p class="msg"> Your '.$cabin.' for '.$guestnum.' guests will be ready for you at 11am on '.$datein.'. We look forward to seeing you then!</p>');
				?>
			</div>
		</main>
		<footer>
			<p><small>This is an imaginary resort created as a course requirement for COMP1002. All information is <strong>fictional</strong>. &copy;2019 Holly Bedard Creations</small></p>
		</footer>
	</body>
</html>
