<?php
   echo "Welcome  to php tutorial of multi dimensional array<br>";
   $multi_arr=array(array(2,5,7,8),
                    array(1,2,3,4),
                    array(5,6,7,8));
    // echo $multi_arr[1][1];

    for ($i=0; $i < count($multi_arr); $i++) { 
        for ($j=0; $j < count($multi_arr[$i]); $j++) { 
           echo $multi_arr[$i][$j];
           echo " ";
        }
        echo "<br>";
    }
?>