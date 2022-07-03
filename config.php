<?php
  $server_name = "localhost";
  $user_name = "root";
  $password ="";
  $database = "glowydbms";
 
  $connection = new mysqli($server_name , $user_name, $password,  $database);

  /*Check connection */
  if($connection -> connect_error){
      die("Connection error");
  }
  else{
      echo "Connected";
  }
?>