<?php
  $a=35;
  $b=10;
//1.Arithmetic operator
  echo "For a+b,result is ".($a+$b)."<br>";
  echo "For a-b,result is ".($a-$b)."<br>";
  echo "For a*b,result is ".($a*$b)."<br>";
  echo "For a/b,result is ".($a/$b)."<br>";  
  echo "For a%b,result is ".($a%$b)."<br>";

  $x=80;
  $z=$x;
//2.Assignment operator
  echo "For z,the result is:".($a)."<br>";

  //3.Comparison opeartor

  $d=8;
  $e=7;

  echo "For x==y,the result is ".($d==$e)."<br>";

  echo "For x==y,the result is ";
  echo var_dump($d==$e);
  echo "<br>";

  echo "For x>y,the result is ";
  echo var_dump($d>$e);
  echo "<br>";

   
  
  //4.Logical operator
  $m=true;
  $n=false;
  echo "For m and n,the result is ";
  echo var_dump($d&&$e);
  echo "<br>";

  echo "For m or n,the result is ";
  echo var_dump($d||$e);
  echo "<br>";
  
  echo "For not n,the result is".(!$n)."<br>";
?>