
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Register form</title>
</head>
<body>
 <div class="container">
   <form action=" " method="POST">
 	 <div class ="title">
 		Registration Form
 	 </div>
 	 <div class="form">
 	 <div class="input_field">
 		<label>name</label>
 		<input type="text" class="input" name="name" placeholder="Enter name">
        <?php if(isset($err['name'])){ ?> <?php echo $err['name']?> <?php }?>
 	 </div>
 	
 	 <div class="input_field">
 		<label>Password</label>
 		<input type="password" class="input" name="password" placeholder="Enter Password">
        <?php if(isset($err['password'])){ echo $err['password'];}?>
 	 </div>
 	
 	 	<div class="input_field">
 		<label>Email</label>
 		<input type="text" class="input" name="email" placeholder="Enter Email">
          <?php if(isset($err['email'])){ echo $err['email'];}?>
 	 </div>
 	 <div class="input_field">
 		<label>phonenumber</label>
 		<input type="text" class="input" name="phonenumber" placeholder="Enter phonenumber">
        <?php if(isset($err['phonenumber'])){ echo $err['phonenumber'];}?>
 	 </div>
    <div class="input_field">
       <label>dob</label>
      <input type="date" class="input" name="dob" placeholder="Enter dob">
        <?php if(isset($err['dob'])){ echo $err['dob'];}?>
    </div>
    <div class="input_field">
    <label for="role">Role:</label> 
    <select name="role" id="role">
      <option>Select role</option>
      <option>admin</option>
      <option>users</option>
    </select>
  </div>
 	 <div class="input_field terms">
 		<label class="check">
 		<input type="checkbox">
 		<span class="checkmark"></span>
	   </label>
	   <p>Agree to terms and conditions</p>
    </div>
    <div class="input_field">
    	<input type="submit" value="Register" class="btn" name="submit">
    </div>
     </div> 
     <a href="login.php">Click to login</a>
   </form>
</body>
</html>


<?php
 print_r($_POST);
 if(isset($_POST['submit'])){
    $err=[];
    extract($_POST);
    if(isset($_POST['name']) && !empty($_POST['name'])&& trim($_POST['name'])){
      $length=strlen($_POST['name']);
      if(preg_match('/^[A-Z][a-zA-Z\s]+$/',$_POST['name']) ) {
        if($length>=8){
          $name=$_POST['name'];
        } else{
          $err['name']='Enter valid name with minimum length 8';
        }
      } else{
        $err['name']="Enter valid name";
      }
  } else{
    $err['name']='Enter name';
  }
  
  if(isset($_POST['password']) && !empty($_POST['password'])) {
    $small=preg_match('/[a-z]/',$_POST['password']);
    $capital=preg_match('/[A-Z]/',$_POST['password']);
    $number=preg_match('/[0-9]/',$_POST['password']);
    $special=preg_match('/[\$\@\#\!\_\-\*]/',$_POST['password']);
    $len=strlen($_POST['password']);
    if($small==1&&$capital==1&&$number==1&&$special==1&&$len>=8&&$len<=16) {
      $password=$_POST['password'];
    }else{
      $err['password']='Enter valid password with mimimum length 6';
    }
  } else {
    $err['password']='Enter password';
  }
  if(isset($_POST['phonenumber']) && !empty($_POST['phonenumber'])&& trim($_POST['phonenumber'])){
    if(!preg_match('/^[9]{1}[0-9]{9}$/',$_POST['phonenumber'])) {
      $err['phonenumber']='Enter valid phonenumber OF 10 digit start with 9';
    }
    $phonenumber=$_POST['phonenumber'];
  }else{
    $err['phonenumber']='Enter phonenumber';
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
  if(isset($_POST['dob']) && !empty($_POST['dob']))
     { 
       if(!preg_match("/^\d{4}-\d{2}-\d{2}$/",$_POST['dob']))
       
        $err['dob']="Enter valid data of birth of format yyyy-mm-dd";
       }
       else{
        $dob=$_POST['dob'];
       }
 print_r($err);

  if(count($err)==0)
  {
    require_once 'db_connection.php';
    
     $name =$_POST['name'];
     $password =$_POST['password'];
     $email =$_POST['email'];
     $phonenumber =$_POST['phonenumber'];
     $dob =$_POST['dob'];
     $role  =$_POST['role'];
     echo $query = "INSERT INTO users(name,password,email,phonenumber,dob,role) values('$name','$password','$email','$phonenumber','$dob','$role')";
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
}
?>