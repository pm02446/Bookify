<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>My Recommendations</title>
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
                <h1 id="logo"><a href="userhome.html">Bookify</a></h1>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li>
                            <a href="#">Profile</a>
                            <ul>
                                <li><a href="settings.html">Settings</a></li>
                            </ul>
                        </li>
                        <li><a href="mybooks.html">My Books</a></li>
                        <li class="break"><a href="myreccom.html">My Recommendations</a></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </nav>

            </div>
        </div>

        <!-- Main -->
        <div class="container" id="main">
            <div class="inner">
                <header>
                    <h2>Recommendations</h2>
                </header>
                <section class="tiles">
                <?php
                            $usr = $_SESSION['user_id'];
                            $genre = 'genre'
                            //stores query in variable.
                            $q = 'DELETE * FROM  users_book WHERE genre=?';
                            $statement = $conn->prepare($q);
                            //bind the values to the statement.
                            $statement->bindValue(1,$usr,PDO::PARAM_STR);
                            $statement->bindValue(1,$genre,PDO::PARAM_STR);
                            $statement->execute();
                            $row = $statement->fetchAll();
                            
                            if($row != null){
                                echo "<table>
                                <tr>
                                <th><h3>title</h3></th>
                                <th><h3>Author</h3></th>
                                <th><h3>Description</h3></th>
                                <th><h3>Image</h3><th>
                                </tr>";
                                
                                foreach($row as $r){
                                echo "<tr>";
                                    echo "<td>" .$r['title'] ."</td>";
                                    echo "<td>" .$r['author'] ."</td>";
                                    echo "<td>" .$r['description'] ."</td>";
                                    echo "<td>" .$r['image']."</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";								
                            }  
    
                   ?>
                </section>
            </div>
        </div>

        <!-- Footer -->
        <div id="copyright" class="container">
            <ul class="menu">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: Bella Obidike <a href="http://html5up.net">HTML5 UP</a></li>
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