<?php
include('add.php');
?>
<html>
 <head>
 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
  <title>Edit Library</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
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
                <li><a href="edit.php"> Edit Library</a></li>
                <li class="break"><a href="myreccom.php">My Recommendations</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>

    </div>
</div>
  <div class="container">
   <br />
   <h2 align="center">Search Our Libraries</h2><br />
   <form method = "POST" action = "add.php">
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search for Books" class="form-control" />
    </div>
    <div align="center">
        <ul class="actions special">
            <li><input type="submit" name="sb" value="Add to your Library by title" /></li>
        </ul>
    </div>
   </div>
   <br />
   <div id="result"></div>
   </form>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
