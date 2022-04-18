<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "web_prog";

$conn = mysqli_connect($server,$username,$password, $database);

if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   $email = $_POST['email'];
   $pass = $_POST['password'];

   
   $sql = "SELECT `email`, `pass` from `web_prog`.`registration` WHERE 1;";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo " - Email ID: " . $row["email"].   " - Password: " . $row["pass"] , "<br>";
    }
  } else {
    echo "0 results";
  }

  $conn->close();


}

?>