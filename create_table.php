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

  $sql="CREATE TABLE `trip2` (`sno` INT(6) NOT NULL AUTO_INCREMENT  , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`))";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "Table is created is created</br>";
   }
   else{
    echo "The database is not created because of this error--->".mysqli_error($conn);
   }
?>