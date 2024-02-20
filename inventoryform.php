<!DOCTYPE html>
<html>
<head>
    <title>Inventory Request form</title>
    <style type="text/css">
               *{
                 margin: 11px;
                  padding: 0px;
                 background-color: lightpink;
                 }
          body{
               background_color:lightpink;
               padding-block: 0 10px;
              }
              .container{
               max-width: 500px;
               width:50%;
               background-color: indianred;
               margin:20px auto;
               padding : 30px;
               border-bottom:50px ;
          }
          .container .title{
               font_size:60px;
               font-weight:500;
               color: black;
               text-align: left;
          }
          
          .container.input_field{
               margin-bottom: auto;
               display: auto;
               align-items: center;
               width:200px;
               scroll-margin-left: 10px;
               font-size: 16px;
               padding: auto;
          }
          </style>
</head>
<body>
    <div class="container">
    <h1>Enter your request</h1>
    <form method="POST" action="">
    <!--<label for="user_id">User:</label>
    <input type="number" name="user_id" required><br><br-->
    <label for="inventory_id">Inventory Item:</label>
    <input type="number" name="inventory_id" required><br><br>
    <label for="requested_quantity">Requested Quantity:</label>
    <input type="number" name="requested_quantity" required>
    <input type="submit" name="request_inventory" value="Request Inventory">
</form>
</body>
</html>


<?php
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


// User requests inventory
if (isset($_POST['request_inventory'])) {
   // $user_id = $_POST['user_id'];
    $inventory_id = $_POST['inventory_id'];
    $requested_quantity = $_POST['requested_quantity'];

    $query = "INSERT INTO inventory_requests ( inventory_id, quantity) VALUES ( $inventory_id, $requested_quantity)";
        $data = mysqli_query($connection,$query); 
     if($data)
     {
      echo"Data inserted into db";
     }
      else
    {
      echo"failed";
    }
    // Execute SQL query to record the user's request
    // You should handle database errors here
}

/*if ($conn->query($sql) === TRUE) {
    echo "Requested successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/
?>
