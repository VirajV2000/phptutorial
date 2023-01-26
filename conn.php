<?php
  echo "Welcome to the php tutorial of database connection<br>";
  $servername="localhost";
  $username="root";
  $password="";
//create a connection
  $conn=mysqli_connect($servername,$username,$password);

  //Die if connection was not successful
  if(!$conn)
  {
    die("Sorry we failed to connect ".mysqli_conncet_error());

  }
  else{
    echo "Connection is successful";
  }
?>