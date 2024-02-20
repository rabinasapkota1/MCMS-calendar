<?php
// Database connection setup here (mysqli_connect or PDO)
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

// Admin manages inventory
if (isset($_POST['manage_inventory'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $admin_id = $_POST['admin_id'];
    $price = $_POST['price'];

    echo $query = "INSERT INTO inventory (name, quantity, admin_id,price) VALUES ('$name', $quantity, $admin_id,$price)";
    $data = mysqli_query($connection,$query); 
     if($data)
     {
      echo"Data inserted into db";
     }
      else
    {
      echo"failed";
    }
    // Execute SQL query to add/update inventory item
    // You should handle database errors and user authentication here
}

// Check if inventory is low and order more if necessary (run this periodically)
//$sql = "SELECT id, name, quantity FROM inventory WHERE quantity < 10";
// Execute SQL query to get low inventory items
// You should handle database errors here

/*while ($row = mysqli_fetch_assoc($result)) {
    $inventory_id = $row['id'];
    $name = $row['name'];
    $quantity = $row['quantity'];
    
    // Order more inventory logic here
    // You can send an email or a notification to the supplier
}
*/
?>
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
    <h1>Inventory details</h1>
    <form method="POST" action="">
     <label for="name">Inventory Item:</label>
    <input type="text" name="name" required><br> <br>
    <label for="quantity">quantity:</label>
    <input type="number" name="quantity" required><br> <br>
    <label for="name">admin_id:</label>
    <input type="text" name="admin_id" required><br> <br>
    <label for="name">price:</label>
    <input type="text" name="price" required><br> <br>
    <input type="submit" name="manage_inventory" value="Manage Inventory"><br><br>
<a href="addinventory.php">Add inventory</a><br> <br>
<a href="removeinventory.php">Delete inventory</a><br><br>

</form>
</body>
</html>

