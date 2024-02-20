<html>
<head>
  <title>ADD</title>
  <style>
    body
    {
      background: lightpink;

    }
    table
    {
      background: white;
    }
  </style>
</head>
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
  $query ="SELECT * FROM inventory";
   $data =mysqli_query($connection,$query);
   $total = mysqli_num_rows($data);
  
  
   //echo $total;
   if($total ! = 0)
   { 
    ?>
    <h2 align="center"><mark>Adding Inventory</mark></h2>
    <center><table border="2" cellspacing="7" width="80%">
      <tr>
      <th width="17%">name</th>
      <th width="10%">quantity</th>
      <th width="10%">admin_id</th>
      <th width="10%">price</th>
       <th width="10%">opration</th>
      </tr>
    <?php
    while( $result = mysqli_fetch_assoc($data))
    {
      echo "<tr>
      <td>".$result[id]."</td>
      <td>".$result[name]."</td>
      <td>".$result[quantity]."</td>
      <td>".$result[admin_id]."</td>
      <td>".$result[price]."</td>
      <td><a href='update.php?id=$result[id]&name=$result[name]&quantity=$result[quantity]&admin_id=$result[admin_id]&price=$result[price]'>update</a></td>
      </tr>";
     
    //echo "Table has records";
   }
 }
   else
   {
    echo "No records found";
   }
  ?>
</table>
</center>
