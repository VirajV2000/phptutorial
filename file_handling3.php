<?php
 $fptr=fopen("myfile.txt","r");
 //echo fgets($fptr);
 //echo fgets($fptr);
 //echo var_dump(fgets($fptr));
 
 /*
 //Reading a file line by line
 while($a=fgets($fptr)){
    echo $a;
 }
 echo "End of the file has been reached";
 */
/*
//Reading a file character by character
 while($a=fgetc($fptr)){
    echo $a;
    //break;
 }
 echo "End of the file has been reached";
 */
//write a program to read a content of a file till reaching the .
while($a=fgetc($fptr)){
    echo $a;
    if($a=="."){
        break;
    }
    //break;
 }
?>