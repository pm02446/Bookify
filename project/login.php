<?php

session_start();
include('connetDB.php');
//variables for the forms.

if (isset($_POST['sb'])){

    $usr = $_POST['usrName'];
    $pass = $_POST['password'];
    
    if(empty($usr) || empty($pass)){
        $message = '<label> Fill out the form.</label>';
        echo $message;
    }
    else{
        
        $q = 'SELECT username, userpass FROM users WHERE username = ? AND userpass = ?';
        $statement = $conn->prepare($q);
        $statement->bindValue(1,$usr,PDO::PARAM_STR);
        $statement->bindValue(2,$pass,PDO::PARAM_STR);
        $statement->execute();
        $row = $statement->fetch();
        
        
       echo $row;
        if($row['username'] != $usr || $row['userpass'] != $pass){
            header('location:sigin_in.php');
            die('INCORRECT PASSWORD/USERNAME.');
        }
        else{
            
            $vp = true;
            
            if($vp){
                $_SESSION['user_id'] = $row['username'];
				$_SESSION['logged_in'] = time();
                header('location:homePage.php');
                exit;
            }
            else{
                header('location:sigin_in.php');
                die('INCORRECT PASSWORD/USERNAME.');
            }
        }
        
    }
        
}

?>
