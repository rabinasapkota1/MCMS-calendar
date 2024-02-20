<?php



?>
<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style type="text/css">
     *{
  margin: 11px;
  padding: 0;
}

 body{
  background-color: lightpink;
  background-size: cover;
} 
.logo{
  display: flex;
  align-items: center;
}
.logo img{
  margin-top: 5px;
height: 116px;
width: 107px;
margin-left: -46px;
}
.container{
  max-width: 80%;
  margin: 0 auto;
  padding-top: 20px;
}
.header{
  
  
  position: absolute;
  width: 100%;
  height: 1000px;
  z-index: 1;
}
.navbar {
  display: flex;
  justify-content:space-between;
  align-items: center;
  height: 50px;
  padding-right: 30px;
  margin: 50px 0;
}

 .title h1{
  color: red;
  font-size: 31px;
  padding-bottom: 14px;
}

.navbar  .nav ul{
  text-decoration: none;
  margin-left: 20px;
  padding-right:10px;
  text-align: inherit;
  font-size: 30px;
  color: white;
  border-radius: 10px;
 
}
section{
        display: inline-block;
}
.text{
  font-size: 20px;
}
#image img{
width: 250px;
height: 150px;
position: relative;

}
.navbar  a{
  text-decoration: none;
  margin-left: 20px;
  padding:10px 20px;
  text-align: center;
  font-size: 19px;
  color: white;
  border-radius: 10px;
 
}

.navbar a:hover{
background-color: yellowgreen;
}


.navbar #home{
  background-color: yellowgreen;
  border-radius: 10px;
  color: white;
}
footer.contact{
  float: inherit;
  display:flex;

} 
.motive-image{
  width: 100px;
  height: auto;
 
  display: flex;
}

 .contact .p{
  font-size: 13px;
  color: white;
}
  .contact {
 position: center;
 top: 150vh;
 left: 120vh;
 display: flex;
 list-style: none;
 padding-bottom: 20px;
 text-align: left-center;
  }
  .contact{
    position: center;
    top: 190vh;
    right: 50px;
    padding-left: 350px;
  }


 </style>

</head>

<body>
  <div class="header">
        <div class="container">
           
      <div class="logo">
                <div class="logoimage">
                   <img src="image/logo.jpg" alt="logo">
                 </div>
                 <div class="title">
                   <h1>Menstruration Calender Management System</h1>
                </div>
      
       </div>
<div class="navbar">
    <nav>
        <ul>
            <li><a  id="home" href="home.php">Home</a></li>
        <li><a href="About us.php">About us</a></li>
        <li><a href="form.php">Registration</a></li>
        <li><a href="login.php">Login</a></li>
         <li><a href="adminlogin.php">AdminLogin</a></li>
      </ul>
    </nav>
  </div>
  </header>
  
  <section id="image">
    <img src="image/ca.jpg">
    <img src="image/456.jpg">
    <img src="image/787.jpg">
   
    <img src="image/image6.jpg"></section>
    <div class="text">
      <h2>Main motive</h2>
      <div class="motive-image">
      <img src="image/image1.jpg">
      <img src="image/image2.jpg">
    </div>
      <p>Maintain your menstrual health with us.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a href="#" class="btn">Learn More</a>
    </div>
  </div>

   <div class="contact">
         <div class="text">
            <p>Mensturation Calender Management System<br>Bagbazar,ktm</p>
             <p>269-492-1010<br>info@Mensturationcalendersystem.com</p>
          </div>
            <li><i class="fa-brands fa-facebook"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-twitter"></i></li>
            <li><i class="fa-brands fa-youtube"></i></li>
              </div>
  </div>

</div>
</body>

</html>