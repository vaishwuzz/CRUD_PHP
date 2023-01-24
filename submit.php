<?php 
 require "connect.php";

if(isset($_REQUEST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $number = $_POST['number'];

  if(empty($name) || empty($email) || empty($message) || empty($number)) {
   echo $status = "All fields are compulsory.";
  } else {
    if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
        echo $status = "Please enter a valid name";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $status = "Please enter a valid email";
    } else if(!preg_match('/^[0-9]{10}+$/', $number)) {
        echo   $status = "Invalid Phone Number";
        }
       else {
      //  echo "INSERT INTO contactinfo (name, email, message , number) VALUES ('$name', '$email', '$message', '$number')";


              $sql = $con->query("INSERT INTO contactinfo (name, email, message , number) VALUES ('$name', '$email', '$message', '$number')");

    if($sql){
        echo $status = "Your message was sent";  
    }
  }

  header('Refresh:5;url=display.php');
}}

?>