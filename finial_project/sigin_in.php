<?php 
include('login.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sign-in</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="welcome.php">Bookify</a></h1>
				</header>

			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>Sign-in</h2>
						<p></p>
					</header>
					<div class="box">
						<form method="post" action="login.php">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-mobilep">
									<input type="text" name="usrName" value="" placeholder="UserName" />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="password" name="password" placeholder="Password" />
								</div>
								
								</div><br>
								<div class="col-12">
									<ul class="actions special">
										<li><input name="sb"type="submit" value="Login" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
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