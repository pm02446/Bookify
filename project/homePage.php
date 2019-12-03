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
					<h1><a href="welcome.php">Library</a> Home Page</h1>
					<nav id="nav">
						<ul>
							<li><a href="logout.php" class="button">Logout</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Your Wonder Land</h2>
						<p>Where you go for adventrue. </p>
					</header>
					<div class="box">
							<span class="image featured"><center><p><h2>
							<?php echo "Welcome, ",$first ." " .$last ."!"; ?>
							</h2></p></center></section></span>
							<center>
							<a href="mybooks.php" class="button">My Books</a> 
							<a href="myreccom.html" class="button">My Recommedndations</a> 
							</center><br>
					
					
				</section>

			
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