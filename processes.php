<?php
require  'dbconnect.php';
$Fullname = $_POST ['Fullname'];
$email = $_POST ['email'];
$Password = $_POST ['Password'];
$Username = $_POST ['Username'];

$user_insert = "INSERT INTO users(Fullname, Email,Password,Username)VALUES('$Fullname','$Email','$Password','$Username')";
 if($conn->query($msg_insert) === TRUE){

     //The following statement will be executed if data was successfully inserted into the database.
     //header("Location: dbconnect.php"); will create a redirection the a desired destination.
     header("Location: ../signup.html");
     exit();
     
     }else{
      // Else if the query fails, the reason will be displayed on the screen using the statement that follows.
         print "Failed: <br />" . $conn->error;
	 }
?>
