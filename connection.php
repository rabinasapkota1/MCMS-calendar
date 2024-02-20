<?php
$connection = new mysqli('localhost','root','','mcms');
  print_r($connection->connect_errno != 0){
    die('Database Connection Error: ' . $connection->connect_error );
  }
?>