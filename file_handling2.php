<?php
  $fptr=fopen("myfile.txt","r");
  if(!$fptr){
    die("unable to open the file");
  }
  $content=fread($fptr,filesize("myfile.txt"));
  echo $content;
  fclose($fptr);
?>