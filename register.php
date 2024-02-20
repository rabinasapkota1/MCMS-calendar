<?php
if (isset($_POST['btnregister']))
{
    $err=[];
extract($_POST);
if(isset($_POST['username']) && !empty($_POST['username'])&& trim($_POST['username'])){
$length=strlen($_POST['username']);
if(preg_match('/^[A-Z][a-zA-Z\s]+$/',$_POST['username']) )
{
if($length>=8)
{
     $username=$_POST['username'];
}

else{
$err['username']='Enter valid name with minimum length 8';
}
}
else{
$err['username']="Enter valid name";
}
}
else{
$err['username']='Enter name';
}
if(isset($_POST['password']) && !empty($_POST['password']))
{
$small=preg_match('/[a-z]/',$_POST['password']);
$capital=preg_match('/[A-Z]/',$_POST['password']);
$number=preg_match('/[0-9]/',$_POST['password']);
    $special=preg_match('/[\$\@\#\!\_\-\*]/',$_POST['password']);
    $len=strlen($_POST['password']);
    if($small==1&&$capital==1&&$number==1&&$special==1&&$len>=8&&$len<=16)
    {
    $password=$_POST['password'];
    }
    else
    {
    $err['password']='Enter valid password with mimimum length 6';
    }
}
else{
$err['password']='Enter password';
}
if(isset($_POST['phone']) && !empty($_POST['phone'])&& trim($_POST['phone']))
{
 if(!preg_match('/^[9]{1}[0-9]{9}$/',$_POST['phone']))
{
$err['phone']='Enter valid phone OF 10 digit start with 9';
}
$phone=$_POST['phone'];
}
else{
$err['phone']='Enter phone';
}

if(isset($_POST['email']) && !empty($_POST['email'])&& trim($_POST['email']))
{
if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
$err['email']="Enter valid email";
}
$email=$_POST['email'];
}
else{
$err['email']='Enter email';
}
if(isset($_POST['address']) && !empty($_POST['address'])&& trim($_POST['address']))
{
if(!filter_var($_POST['address'],FILTER_VALIDATE_ADDRESS))
{
$err['address']="Enter valid address";
}
$address=$_POST['address'];
}
else{
$err['address']='Enter address';
}
if(count($err)==0){
echo "Registered sucessfully";
  require_once 'connect.php';
  $sql ="INSERT INTO users values('$name','$password','$conpassword','$email','$phone','$address','$dob')";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <style type="text/css">
        legend{
            text-align: center;
            width: 30%;
        }
        fieldset{
            width: 722px;
            height: auto;
        }
        body{
            background: lightpink;
        }
        label{
            color: black;
            width: 100px;
            display: inline-block;
            height: 30px;
            padding: 10px;
        }
        input{
            width: 40%;
        }
        input[type=radio],input[type=checkbox]{
            width:3%;
            margin-bottom: 20px;
        }
        input[type=submit]{
            width:80px;
            background-color:green;
            color: white;
            padding-raddius:3px;

        }
        input[type=reset]{
            width: 80px;
            background-color:red;
            color: white;
            padding: 3px;
            border-radius:3px;
        }
        input[type=checkbox]{
            width: 80px;
            padding: 100;
        }
            </style>
    <fieldset>
        <legend>Personal Details</legend>
</head>
<body>
<h1>Registration Form </h1>
<form action="" method="post" id="form">
    <div><label>Username</label>
        <input type="text" name="Username" id="username" placeholder="Enter username">
        <?php if(isset($err['username'])){ echo $err['username'];}?>
    </div>
    <div><label>Password</label>
        <input type="Password" name="Password" id="Password" placeholder="Enter Password">
        <?php if(isset($err['password'])){ echo $err['password'];}?>
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="Address" id="Address" placeholder="Enter Address">
        <?php if(isset($err['address'])){ echo $err['address'];}?>
    </div>
    <div>
        <label>phone</label>
        <input type="text" name="Number" id="Number" placeholder="Enter phone">
        <?php if(isset($err['phone'])){ echo $err['phone'];}?>
    </div>
    <div class="form">
         <label>Email</label>
          <input type="text" name="email" id="Email" placeholder="Enter Email">
          <?php if(isset($err['email'])){ echo $err['email'];}?>
    </div>
    <div>
        <label>Country</label>
        <Select name="Country" id="country">
        <option>Nepal</option>
        <option>USA</option>
        <option>Japan</option>
        <option>India</option>
    </Select>
  <?php if(isset($err['country'])){ echo $err['country'];}?>

</div>
<div>
<input type="checkbox" name="term"/>I accept term & condition
</div>
<input type="Submit" name="btnregister" id="register" value="Register">
<input type="Reset" name="btnReset" id="reset" value="clear">

</form>
</fieldset>
<a href="login.php">Click to login</a>
</body>
</html>