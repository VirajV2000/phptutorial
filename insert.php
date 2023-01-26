<?php
  $servername="localhost";
  $username="root";
  $password="";
  $database="dbviraj";

  $conn=mysqli_connect($servername,$username,$password,$database);

  if(!$conn){
    die("Sorry we failed to connect".mysqli_connect_error());
  }
  else{
    echo "Connection successfully created<br>";
  }
  $sql="INSERT INTO `trip2` ( `name`, `dest`) VALUES ( 'viraj', 'karnataka')";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "The record has been inserted successfully</br>";
   }
   else{
    echo "The record is not inserted because of this error--->".mysqli_error($conn);
   }
?>
  