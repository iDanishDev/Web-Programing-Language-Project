<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "web_prog";

$conn = mysqli_connect($server,$username,$password, $database);

if($_SERVER["REQUEST_METHOD"] == "POST"){

  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $dob = $_POST['dob'];
  $pass = $_POST['pass'];

  $sql = "INSERT INTO `web_prog`.`registration` ( `name`, `email`, `mobile`, `dob`, `pass`) VALUES ('$name', '$email', '$mobile', '$dob', '$pass');";

  mysqli_query($conn,$sql);

  $conn->close();

  include 'login.php';
  
}

?>