<?php  // connect to database 


// $name = $_POST['name']; 
// $email = $_POST['email']; 
// $message = $_POST['message']; 

// $servername = "localhost"; 
// $username = "root"; 
// $password = ""; 
// $dbname = "nafkot"; 
// $conn = new mysqli($servername, $username, $password, $dbname); 
// if(!$conn){
//      die("Unable to connect".mysqli_error($con));
//      }else
//      echo "";
//      $sql = "INSERT INTO book_table (name,email,message)
//       VALUES ('$name', '$email', '$message')"; 
//       if ($conn->query($sql) === TRUE) { 
//           echo "Your message has been sent. Thank you"; 
//      } 
//      else 
//      { echo "Error: " . $sql . "<br>" . $conn->error; } 
//      // close database connection 
//      $conn->close(); ?> 
   else
     // echo "connected successfully";


 $name = $_POST['name']; 
// $email = $_POST['email']; 
// $message = $_POST['message']; 
// $servername = "localhost"; 
// $username = "root"; 
// $password = ""; 
// $dbname = "nafkot"; 
// $conn = new mysqli($servername, $username, $password, $dbname); 
// if(!$conn){
//      die("Unable to connect".mysqli_error($con));
//      }else
//      // echo "connected successfully";
//      // insert data into database 
//      $sql = "INSERT INTO comment (name,email,message)
//       VALUES ('$name', '$email', '$message')"; 
//       if ($conn->query($sql) === TRUE) { 
//           echo "Your message has been sent Thank you"; 
//      }  
//      else 
//      { echo "Error: " . $sql . "<br>" . $conn->error; } 
//      // close database connection 
      $conn->close(); ?> 

     ////echo '<pre>'
// $message_sent = false;

// if(isset($_POST['email']) && $_POST['email'] != ''){

//     is( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL ));{
//         $name = $_POST['name'];
//     $useremail = $_POST['email'];
//     $messageSubject = $_POST['subject'];
//     $message = $_POST['message'];

//     $to = "sisaybayisa21@gmail.com";
//     $body = " ";
//     $body .= "From: " .$name. "\r\n";
//     $body .= "Email: " .$useremail. "\r\n";
//     $body .= "Message: " .$message. "\r\n";


//     mail($to, $messageSubject, $body);
//         $message_sent = true;
//     }
//    else {
//         $invalid_class_name = "form-invalid";
//    }
   

// }


// echo '</pre>'

