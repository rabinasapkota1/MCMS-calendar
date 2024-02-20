<?php 
if (isset($_COOKIE['username'])) {
  session_start();
  $_SESSION['username']= $_COOKIE['username'];
  header('location:dashboard.php');
}

$username = '';
if (isset($_POST['login'])) {
  $err = [];
  if (isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username'])) {
    $username = $_POST['username'];
  } else {
    $err['username'] = "Enter username";
  }

  if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) {
    $small = preg_match('/[a-z]/', $_POST['password']);
    $captital = preg_match('/[A-Z]/', $_POST['password']);
    $number = preg_match('/[0-9]/', $_POST['password']);
    $special = preg_match('/[\$\@\#\!\_\-\*]/', $_POST['password']);
    $len = strlen($_POST['password']);
    if ($small == 1 && $captital == 1 && $number == 1 && $special == 1 && $len >=6 && $len <=  16) {
      $password = $_POST['password'];
    } else {
      $err['password'] = "Enter valid password";
    }
  } else {
    $err['password'] = "Enter password";
  }

  if (count($err) == 0) {
      session_start();
      $_SESSION['username'] = $username;

      if (isset($_POST['remember'])) {
        setcookie('username',$username,strtotime('+7 days'));
      }
      header('location:dashboard.php');
    } else {
      echo  'Login failed';
  require_once 'connect.php';
  $sql = "SELECT * FROM users WHERE username='$username' and password='$password' AND role = 'users'";
  $result = $connection -> query($sql);
  if ($result -> num_rows ==1){
    $row = $result ->fetch_assoc();
    print_r($row);
  }else{
    $msg ='Credential not match';
  }
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <style type="text/css">

  *{
  margin: 11px;
  padding: 0;
  background-color: lightpink;
  }

  body{
    width: 600px;
    height: auto;
  }
  .control{
  padding: 10px;
  }

  .form .fieldset{
  width: 50px;
  background-color: whitesmoke;
  }

    .control label {
      width: 100px;
      display: inline-block;
    }
    .fieldset{
      width: 150px;
      height: 200px;
    
    }
     input[type=submit]{
            width:80px;
            background-color:green;
            color: white;
            padding-raddius:3px;
          }
     a{
      font-size: 15px;
      color: red;
    }
    .error_messege{
      background-color: #f00;
      color: #fff;
      padding: 5px;
    }

  </style>
</head>
<body>
<h1>Login</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <fieldset>
    <?php if (isset($msg)){?>
      <p class="error_message"><?php echo $msg ?></p>
    <?php } ?>
  <div class="control">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="<?php echo $username ?>" />
    <?php echo isset($err['username'])?$err['username']:''; ?>
  </div>
  <div class="control">
    <label for="password">password:</label>
    <input type="password" name="password" id="password" />
    <?php echo isset($err['password'])?$err['password']:''; ?>
  </div>
  <div class="control">
    <label for="role">Role:</label> 
    <select name="role" id="role">
      <option>Select role</option>
      <option>admin</option>
      <option>users</option>
    </select>
  </div>

  <div class="control">
    <input type="checkbox" name="remember" id="remember" value="remember" /> Remember me for 7 days
  </div>
  <div class="control">
    <input type="submit" name="login" id="login" />
  </div>
  </fieldset>
<div class="text">
<a href="register.php">don't have account...click to register</a>
</div>
</form>
</body>
</html>