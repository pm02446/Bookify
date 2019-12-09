<?php
//need this to connect to database.
include('connetDB.php');
//need this to continue session.
session_start();
//checks to see if the user has signed.
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in']) ){
	//will send user back to sign-in.
	header('location:sign_in.php');
	exit;
}
?>

<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>My Books</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="left-sidebar is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <div id="header" class="container">

                <!-- Logo -->
                <h1 id="logo"><a href="homePage.php">Bookify</a></h1>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li>
                            <a href="#">Profile</a>
                            <ul>
                                <li><a href="settings.html">Settings</a></li>
                            </ul>
                        </li>
                        <li><a href="mybooks.php">My Books</a></li>
                        <li><a href="edit.php"> Add To Library</a></li>
                        <li class="break"><a href="myreccom1.php">My Recommendations</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>

            </div>
        </div>

        <!-- Main -->
        <div class="container" id="main">
            <div class="inner">
                <header>
                    <h2>Library</h2>
                </header>
                <section class="box">
                    <?php
                            $usr = $_SESSION['user_id'];
                            //stores query in variable.
                            $q = 'SELECT title, author, description, image, rating FROM book as b, users_book as r 
                            WHERE username=? and r.ISBN=b.ISBN';
                            $statement = $conn->prepare($q);
                            //bind the values to the statement.
                            $statement->bindValue(1,$usr,PDO::PARAM_STR);
                            $statement->execute();
                            $row = $statement->fetchAll();
                            
                            if($row != null){
                                echo "<table>
                                <tr>
                                <th><h3>title</h3></th>
                                <th><h3>Author</h3></th>
                                <th><h3>Description</h3></th>
                                <th><h3>Image</h3><th>
                                <th><h3>Rating</h1\3><th>
                                </tr>";
                                
                                foreach($row as $r){
                                echo "<tr>";
                                    echo "<td>" .$r['title'] ."</td>";
                                    echo "<td>" .$r['author'] ."</td>";
                                    echo "<td>" .$r['description'] ."</td>";
                                    echo "<td>"; ?> <img src="<?php echo $r['image']; ?> "height='100' width='100'><?php echo"</td>";
                                    echo "<td>" .$r['rating'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";								
                            }  
    
                   ?>
                   <div class="box">
						<center><h1>Take a Book Out Of Your Libary </h1></center>
						<form method="post" action="delete.php">
							
							<div class="row gtr-50 gtr-uniform">
								<div class="col-12">
									<input type="text" name="book" id="subject" value="" placeholder="Title" />
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" name="sb" value="Delete" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>

                </section>
            </div>
        </div>

        <!-- Footer -->
        <div id="copyright" class="container">
            <ul class="menu">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: Bella Obidike<a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>