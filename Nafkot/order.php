<?php
$name = $_POST['name']; 
$useremail = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$people= $_POST['people'];
$message = $_POST['message'];



$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "nafkot"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if(!$conn){
     die("Unable to connect".mysqli_error($con));
     }else
     // echo "connected successfully";
     // insert data into database 
     $sql = "INSERT INTO finalorder (name,email, message, date, time, phone, people)
      VALUES ('$name', '$useremail', '$message', '$date', '$time','$phone', '$people')"; 
      if ($conn->query($sql) === TRUE) { 
          echo "Your order has been sent Thank you"; 
     }  
     else 
     { echo "Error: " . $sql . "<br>" . $conn->error; } 
     //close database connection 
     $conn->close();


?>