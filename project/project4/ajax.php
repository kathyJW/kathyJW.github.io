<?php
$uname = $_GET["uname"];
   $uemail  = $_GET["uemail"];
   $tarea = $_GET["tarea"];
   
   echo 'Thank you for contacting us!';
   echo '<br>';
   echo '<br>';
   echo 'The message you sent is below';
   echo '<br>';
   echo '<br>';
   echo 'Name: ';
   echo $uname;
   echo '<br>';
   echo '<br>';
   echo 'E-mail: ';    
   echo $uemail;
   echo '<br>';
   echo '<br>';
   echo 'Text: ';
  echo $tarea; 
?>
