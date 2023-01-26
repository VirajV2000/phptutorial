<?php
   echo "Wecome to php tutorila of Associative array<br>";
   $favCol=array('viraj'=>'Black',
                 'sudeep'=>'Pink',
                 'rachan'=>'Red');
    echo "Favorite color of viraj is ".$favCol['viraj']."<br>";

    foreach ($favCol as $key => $value) {
        echo "Favorite color of $key is $value<br>";
    }
?>