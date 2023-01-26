<?php
   echo "Welcome to the php tutorial of creating database</br>";
   $servername="localhost";
   $username="root";
   $password="";
   
   $conn=mysqli_connect($servername,$username,$password);

   if(!$conn){
    die("Sorry we failed to connect".mysqli_connect_error());
   }
   else{
    echo "Connection is established</br>";
   }

   $sql="CREATE Database dbviraj3";

   $result=mysqli_query($conn,$sql);

   if($result){
    echo "Database is created</br>";
   }
   else{
    echo "The database is not created because of this error--->".mysqli_error($conn);
   }
?>