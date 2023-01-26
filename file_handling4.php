<?php
 //writing to a file 
 //$fptr=fopen("myfile2.txt","w");
//  fwrite($fptr,"This is the best file on the planet.Dont argue with this.");
//  fwrite($fptr,"This is another content");
//fwrite($fptr,"This is another content");
 //fclose($fptr);

 //writing file in a append mode
 $fptr=fopen("myfile2.txt","a");
 fwrite($fptr,"This is appending\n");
 fwrite($fptr,"This is appending2");
 fclose($fptr);
?>