<!DOCTYPE html>
<?php 
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
 ?>
<html>
<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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

<h1>Dashboard</h1>
<div class="header">
<h2>Welcome user</h2>
<a href="logout.php">Logout</a>
<a href="perioddatetable.php">click to record your details</a>
<a href="helpforyou.php">Help for you</a>
<a href="inventory.php">Get inventory</a>
<a href="inventoryform.php">fill form</a></div></body></html></a>

</div>
    <h1>My profile</h1>
    <p>In this busy life schedule in most of the case it is hard to remind every things.But when we talks about health you have to be more cearful about it.
    For gilrs you have to make sure that your menstrual health is in good condition or not. So records your every month period date and get notify by us and you can also get final report and health tips according to your report.</p>
     <div class="image">
        <img src="image/calender.webp">
         <img src="image/cc.webp">
       </div>
      
</div>
</body>
</html>