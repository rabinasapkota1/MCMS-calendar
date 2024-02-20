<?php
$servername ="localhost";
  $username ="root";
  $password ="";
  $dbname ="mcms_2080";

  $connection =mysqli_connect($servername,$username,$password,$dbname);

  if($connection)
  {
    echo "Connection ok";
  }
  else
  {
    echo "Connection failed".mysqli_connect_error();
  }

// Add a new product to the inventory
if (isset($_POST['add_inventory'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $admin_id =$_POST['admin_id'];
    


    $query = "INSERT INTO inventory(name, quantity, price,admin_id) VALUES ('$name', '$quantity', '$price','$admin_id',)";
    $data = mysqli_query($connection,$query); 
     if($data)
     {
      echo"Data inserted into db";
     }
      else
    {
      echo"failed";
    }
}
?>

<!-- HTML form for adding products -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
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
    <h1>Add Product</h1>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        quantity: <input type="number" name="quantity" required><br>
        price: <input type="number" name="price" step="0.01" required><br>
        admin_id: <input type="number" name="admin_id"  required><br>
        <input type="submit" name="add_inventory" value="Add Inventory">
    </form>
</body>
</html>