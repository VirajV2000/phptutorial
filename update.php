<?php
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="dbviraj";

   $conn=mysqli_connect($servername,$username,$password,$dbname);

   if($conn)
   {
    echo "Connection created successfully"."<br>";
   }
   else{
    die("sorry we failed to connect".mysqli_connect_error());
   }

   $sql="SELECT * FROM trip2 where dest='karnataka'";
   $result=mysqli_query($conn,$sql);
   echo "No.of rows ".mysqli_num_rows($result);
   echo "<br>";

   while($row=mysqli_fetch_assoc($result)){
    echo $row['sno']." Hello ".$row['name']." welcome to  ".$row['dest']."<br>";
   }

   $sql="UPDATE `trip2` SET `name` = 'virajU' WHERE `trip2`.`dest` = 'Bihar';";
   $result=mysqli_query($conn,$sql);
   $aff=mysqli_affected_rows($conn);
   echo "No.of rows affted:".$aff."<br>";
   if($result)
   {
      echo "Records updated successfully";
   }
   else{
      echo "Updation failed";
   }

?>