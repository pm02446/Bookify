<?php
//need this to connect to database.
include('connetDB.php');
//need this to continue session.
session_start();
//checks to see if the user has signed.
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
	//will send user back to sign-in.
	header('location:sigin_in.php');
	exit;
}
//if user is signed in.
else{
	if($_POST['sb']){
	//stores the session's user name in variable.
    $book = $_POST['book'];
    $usr = $_SESSION['user_id'];
		
	//stores query in variable.
    $q = 'DELETE FROM users_book WHERE username =? AND ISBN =(SELECT ISBN From book WHERE title = ?);';
	//prepares sql statement.
	$statement = $conn->prepare($q);
	//bind the values to the statement.
	$statement->bindValue(1,$usr,PDO::PARAM_STR);
	$statement->bindValue(2,$book,PDO::PARAM_STR);
	//executes the sql statement.
	$statement->execute();
	header('location:mybooks.php');
		die;
	}
	}
