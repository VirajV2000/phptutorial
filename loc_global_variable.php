<?php
   echo "Welcome to the php tutorial of local and global variable<br>";
   $a=78;
   $b=7;
   function PassValue(){
     global $a,$b;
     $a=1000;
     $b=10;
    echo "The value of global variable  a is:$a and b is:$b<br>";
   }
   PassValue();
   echo "The value of global variable  a is:$a and b is:$b<br>";
   echo var_dump($GLOBALS["a"])."<br>";
   echo var_dump($GLOBALS["b"]);
?>