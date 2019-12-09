<?php
//need this to connect to database.
include('connetDB.php');
//need this to continue session.
session_start();
//checks to see if the user has signed.
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in']) ){
	//will send user back to sign-in.
	header('location:sing_in.php');
	exit;
}
//if user is signed in.
else{
	if($_POST['sb']){
	//stores the session's user name in variable.
	$search = $_POST['search_text'];
  $usr = $_SESSION['user_id'];
	
		
  
        
     //   $statement = $conn->prepare($query);
       // $statement->bindValue(1,$query,PDO::PARAM_STR);
        //$statement->execute();
        
       // if(mysqli_num_rows($query) != 0)//You are mixing the mysql and mysqli, change this line of code
         // {
           // $query = 'SELECT renterUser FROM renters WHERE renterUser = .$rentId;';// echo"name already exists";
            //  exit('not valid userName');
         // }
        //elsexs
           //{
        
    $q = 'INSERT INTO users_book(username,ISBN) VALUES(?,(SELECT ISBN From book WHERE title = ?));';
    //prepares sql statement.
    $statement = $conn->prepare($q);
        
	//bind the values to the statement.
	$statement->bindValue(1,$usr,PDO::PARAM_STR);
    $statement->bindValue(2,$search,PDO::PARAM_STR);
	//$statement->bindValue(3,$q,PDO::PARAM_STR);
  
	//executes the sql statement.
	$statement->execute();
        //$q = 'INSERT INTO othertable(whatever) VALUES(?)
        //$statement  = $conn->prepare($q)
        //$statement->bindvalue(1,$petId,PDO::PARAM_STR)
        //$statement->execute
    
        
        
	header('location:edit.php');
		die;
	}

}
?>
