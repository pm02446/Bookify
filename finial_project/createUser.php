<?php
//need this to connect to database.
include('connetDB.php');
//need this to continue session.

		
	$usr = $_POST['usr'];
	$pass = $_POST['pass'];
	$pass2 = $_POST['pass2'];
	$first = $_POST['First'];
	$last = $_POST['Last'];
	
		
	if($pass == $pass2){
	//stores query in variable.
	$q = 'INSERT INTO users(username,userpass,firstName,lastName) VALUES(?,?,?,?);';
	//prepares sql statement.
	$statement = $conn->prepare($q);
	//bind the values to the statement.
	$statement->bindValue(1,$usr,PDO::PARAM_STR);
	$statement->bindValue(2,$pass,PDO::PARAM_STR);
	$statement->bindValue(3,$first,PDO::PARAM_STR);
	$statement->bindValue(4,$last,PDO::PARAM_STR);
	
	//executes the sql statement.
    $statement->execute();
    header('location: sigin_in.php');
	}
	
	
	