<?php

require 'connect.inc.php';
$query = "SELECT 'username', 'password' FROM 'users' ";
if($query_run = mysqli_query($name1, $query)) {

  while($query_row = mysql_query_fetch_assoc($query_run)) {
    $username = $query_row['username'];
    $password = $query_row['password'];
    echo $username.' has '.$$password.' password.<br>';
  }

  echo 'ok';
}
else {
 echo 'failed';
}

?>