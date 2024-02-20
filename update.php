<?php
// Database connection setup here (mysqli_connect or PDO)
$host = 'localhost';
$username = 'root';
$password = '';

$database = 'mcms_2080';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Admin manages inventory
if (isset($_POST['manage_inventory'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $admin_id = $_POST['admin_id'];
    $price = $_POST['price'];

    echo $sql = "INSERT INTO inventory (name, quantity, admin_id,price) VALUES ('$name', $quantity, $admin_id,$price)";
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
    <title>Updates form</title>
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
    <h1>Update</h1>
    <form method="POST" action="">
     <label for="name">Inventory Item:</label>
    <input type="text" name="name" required><br> <br>
    <label for="quantity">quantity:</label>
    <input type="number" name="quantity" required><br> <br>
    <label for="name">admin_id:</label>
    <input type="text" name="admin_id" required><br> <br>
    <label for="name">price:</label>
    <input type="text" name="price" required><br> <br>
    <input type="submit" name="update" value="update Inventory"><br><br>


</form>
</body>
</html>

