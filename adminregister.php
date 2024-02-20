<?php
//print_r($_POST);//
//print_r($_REQUEST);
//echo $_POST['name'];
//foreach ($_POST as $key=> $value)
//{
// echo $key . ':' . $value . '<br />';
//}

if (isset($_POST['register']))
{
    $err=[];
extract($_POST);
if(isset($_POST['username']) && !empty($_POST['username'])&& trim($_POST['username']))
{
$length=strlen($_POST['username']);
if(preg_match('/^[A-Z][a-zA-Z\s]+$/',$_POST['username']) )
{
if($length>=8)
{
     $name=$_POST['username'];
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
    $err['password']='Enter valid password with mimimum length 8';
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
if(isset($_POST['dob']) && !empty($_POST['dob']))
{

if(!preg_match("/^\d{4}-\d{2}-\d{2}$/",$_POST['dob']))
{
$err['dob']="Enter valid date of birth of format YYYY-MM-DD";
}
else{
$dob=$_POST['dob'];
}
}
else{
$err['dob']='Enter dob';
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
//if(count($err)==0){
//echo "Registered sucessfully";
if(count($err)==0){
    require_once'connect.php';
    
     $username =$_POST['username'];
     $password =$_POST['password'];
     $email =$_POST['email'];
     $phone =$_POST['phone'];
     $dob =$_POST['dob'];
     $query = "INSERT INTO admin values('$username','$password','$email','$phone','$dob')";
     $data =mysqli_query($connection,$query); 
     echo"data submitted";
     if($data)
     {
      echo"Data inserted into db";
     }
      else
    {
      echo"failed";
    }  
   }
   }  
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Form Example rabina</title>
<style type="text/css">
h1{
text-align:absolute;
font-size:40px;
}
.form label{
display:inline-block;
width:100px;
font-size:25px;
}
.form input{
width:153px;
line-height:30px;
margin-top:10px;
}
.form button
{
color:white;
background:brown;
width:100px;
margin-top:10px;
height:35px;
font-size:15px;
}
.box{
padding-left:200px;
}
</style>
</head>
<body>

<h1>Register form</h1>
<div class="box">
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<div class="form">
<label>Username</label>
<input type="text" name="username" value="<?php echo $username; ?>" />
<?php if(isset($err['username'])){ echo $err['username'];}?>
</div>
<div class="form">
<label> Password</label>
<input type="password" name="password" value="<?php echo $password; ?>" />
<?php if(isset($err['password'])){ echo $err['password'];}?>
</div>
<div class="form">
<label>Email</label>
<input type="text" name="email" value="<?php echo $email; ?>"/>
<?php if(isset($err['email'])){ echo $err['email'];}?>
</div>
<div class="form">
<label>DOB</label>
<input type="date" name="dob" value="<?php echo $dob; ?>"/>
<?php echo isset($err['dob'])?$err['dob']:'';?>
</div>
<div class="form">
<label>Phone</label>
<input type="number" name="phone" value="<?php echo $phone; ?>"/>
<?php echo isset($err['phone'])?$err['phone']:'';?>
</div>
<div class="form">
<button type="submit" name="register">Register</button>
</div>

</form>
</div>
</body>
</html>
