<?php
include('home.php');
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="welcome.php">Apartment Portal</a> Home Page</h1>
					<nav id="nav">
						<ul>
							<li><a href="logout.php" class="button">Logout</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Administrator HomePage</h2>
						<p>A higher quality of living.</p>
					</header>
					<div class="box">
							<span class="image featured"><img src="images/pic01.jpg" alt="" /><center><p><h2><?php echo "Welcome, ",$first ." " .$last ."!"; ?></h2></p></center></section></span>
						<center><a href="newUser.php" class="button">New Renter</a> <a href="postPayments.php" class="button">Post Payments</a> <a href="pets.php" class="button">Add Pets</a> <a href="workAdmin.php" class="button">Work Orders</a></center><br>
					</div>
						<div class="box">
							<div class="row-6 row-12-mobilep">
								<center></center><h3>Announcements</h3>
								<p>Four single bedroom apartments left.<br>
								Seven double bedroom apartments left.<br>
								One three bedroom apartments left.<br>
								No four bedroom apartments left.<br>
								POOL IS CLOSED NOV 20- NOV 25!!!</p></center>
							</div><br>
					
							<div class="row-6 row-12-mobilep">
								<h3>This Week at a Glance.</h3>
								<p>November 20 - Pizza party Night.<br>
								   November 28 - Thanksgiving. Office will be closed.<br>
								   December 01 - Movie Night.<br>
								   December 25 - Christmas. Office Will be closed.</p>
							</div>
					</div>
						</div>
					
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>