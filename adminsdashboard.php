<!DOCTYPE html>
<?php 
session_start();
if (!isset($_SESSION['username'])) {
  header('location:adminlogin.php');
}
 ?>
<html>
<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
  <style type="text/css">
    *{
      margin: 29px;
     background-color: lightpink;
    
    }
h1{
  font-size:30px;
  padding-top: 4px;
}
header{  
 position: fixed;
  width: 100%;
  height: 80px;
  z-index: 1;
  display: inline-flex;
}
header .a{
  font-size: 30px;
  color: darkred;
  justify-content:space-between;

}
h1{
  color: black;
  font-size: 31px;
  padding-bottom: 14px;
}
.image{
  width: 700px;
  height: 150px;
  display: inline-flex;
}
h2{
  font-size:30px;
  padding-top: 4px;
  color: blue;
}
p{
  font-size: 20px;
  padding: 15px;

}

  </style>

</head>
<body>

<h1>Admin Dashboard</h1>
<div class="header">
<h2>Welcome Admin</h2>
<a href="adminlogout.php">Logout</a>
<a href="perioddatetable.php">click to record your details</a>
<a href="inventorymanage.php">Manage inventory</a>

</body>
</html>