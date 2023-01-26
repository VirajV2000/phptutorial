<?php
  //include 'db_connect1.php';
   require 'db_connect.php';
   $sql="SELECT * from trip2";
    $result=mysqli_query($conn,$sql);

    //Find the no.of records
    $num=mysqli_num_rows($result);
    echo $num." records in the database";
    echo "<br>";
    while($row=mysqli_fetch_assoc($result)){
        echo $row['sno']." Hello ".$row['name']."Welcome to the ".$row['dest'];
        echo "<br>";
    }

?>