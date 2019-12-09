<?php

$connect = mysqli_connect("localhost", "root", "root", "bookify");
$output = '';
if(isset($_POST["query"]))
{
$search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM book
  WHERE title LIKE '%".$search."%'
  OR author LIKE '%".$search."%' 
  OR genre LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM book ORDER BY ISBN
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Title</th>
     <th>Author</th>
     <th>Genre</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["title"].'</td>
    <td>'.$row["author"].'</td>
    <td>'.$row["genre"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>