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

$sql="SELECT * from trip2";
$result=mysqli_query($conn,$sql);

//Find the no.of records
$num=mysqli_num_rows($result);
echo $num." records in the database";
echo "<br>";

while($row=mysqli_fetch_assoc($result)){
    echo $row['sno']." Hello".$row['name']."Welcome to the ".$row['dest'];
    echo "<br>";
}
?>