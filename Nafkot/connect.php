<?php  // connect to database 

$name = $_POST['name']; 
$email = $_POST['email']; 
$message = $_POST['message'];


$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "nafkot"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if(!$conn){
    die("Unable to connect".mysqli_error($con));
    }
     // insert data into database 
     $sql = "INSERT INTO comment (name,email, message)
      VALUES ('$name', '$email', '$message' )"; 
      if ($conn->query($sql) === TRUE) { 
          echo "Your message has been sent Thank you"; 
     }  
     else 
     { echo "Error: " . $sql . "<br>" . $conn->error; } 
     // close database connection 
     $conn->close(); ?> 
     

     <!-- <?php  // connect to database 
