<?php
  //error reporting(0);
  $servername ="localhost";
  $username ="root";
  $passwword ="";
  $dbname ="mcms_2080";

  $conn =mysqli_connect($servername,$username,$passwword,$dbname);

  if($conn)
  {
  	echo "Connection ok";
  }
  else
  {
  	echo "Connection failed".mysqli_connect_error();
  }

?>