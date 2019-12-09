<?php
//need this to connect to database.
include('connetDB.php');
//need this to continue session.
session_start();
//checks to see if the user has signed.
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in']) || $_SESSION['type'] != "admin"){
	//will send user back to sign-in.
	header('location:sigin_in.php');
	exit;
}
//if user is signed in.
else{
	//stores the session's user name in variable.
	$usr = $_SESSION['user_id'];
	//stores query in variable.
	$q = 'SELECT FirstName, LastName FROM Users WHERE UserName = ?';
	//prepares sql statement.
	$statement = $conn->prepare($q);
	//bind the values to the statement.
	$statement->bindValue(1,$usr,PDO::PARAM_STR);
	//executes the sql statement.
	$statement->execute();
	//fetch the data from the database.
	$row = $statement->fetch();
	
	$first = $row['FirstName'];
	$last = $row['LastName'];
}



?>
<html>
	<head>
	</head>
	<body>
	<?php echo "weclome " .$first ." " .$last; ?>
		
		
		
	<form action="logout.php" >
	<button  name="logout" class="logout">logout</button>
	</form>
	</body>
	</html?