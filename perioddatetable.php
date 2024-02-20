
<!DOCTYPE html>
<html>
<head>
    <title>Period Date Form</title>
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
    <h1>Enter Period Date</h1>
     <form method="POST" method="POST">
        <label for="name">name</label>
        <input type="text" id="name" name="name" required><br><br>
        <div class="input_field">
        <label for="start_date">start_date:</label>
        <input type="date" id="start_date" name="start_date" required><br><br>
        
        <label for="end_date">end_date:</label>
        <input type="date" id="end_date" name="end_date" required><br><br>
        
        <input type="submit" value="Submit">
    </div>
  </div>
    </form>
</body>
</html>
<?php
// Connect to the database (replace with your database credentials)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mcms_2080';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
if (!preg_match('/^[A-Z][a-zA-Z\s]+$/',$name) ||
!preg_match('/^\d{4}-\d{2}-\d{2}$/', $start_date) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $end_date)) {
    echo "Invalid date format. Please use YYYY-MM-DD format.";
    exit;
}

// Insert the period date into the database
$sql = "INSERT INTO period_date ( name,start_date, end_date) VALUES ('$name','$start_date', '$end_date')";

if ($conn->query($sql) === TRUE) {
    echo "Period date added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
