<?php
  //error reporting(0);
  $servername ="localhost";
  $username ="root";
  $passwword ="";
  $dbname ="mcms_2080";

  $connection =mysqli_connect($servername,$username,$passwword,$dbname);

  if($connection)
  {
  	echo "Connection ok";
  }
  else
  {
  	echo "Connection failed".mysqli_connect_error();
  }

?>