<?php
$connection = new mysqli('localhost','root','','mcms_2080');
  if($connection->connect_errno != 0){
    die('Database Connection Error: ' . $connection->connect_error );
  }
?>