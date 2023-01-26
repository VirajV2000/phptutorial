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

$sql="DELETE FROM `trip2` WHERE `trip2`.`dest` = 'karnataka'LIMIT 2";
$result=mysqli_query($conn,$sql);
$aff=mysqli_affected_rows($conn);
echo "No.of rows affted:".$aff."<br>";
if($result){
    echo "Deleted successfully";
}
else{
    $err=mysqli_error($conn);
    echo "Not deleted successfully because of this error-->$err";
}

?>