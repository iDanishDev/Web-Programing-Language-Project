<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="validation.js"></script>



<style>
  .container {

    width: 50%;
    height: 50%;
    margin-top: 5%;

  }

  .background {

    background-color: aliceblue;
    background-repeat: no-repeat;
  }
</style>

<body class="background">


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Danish</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="books.html">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Support</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="login.html">Login</a>
          </li>


        </ul>

      </div>
    </div>
  </nav>













  <form name="reg" action="registration.php" method="POST">

    <div class="container">
      <div align="center">
        <h3>Registration Form</h3>
      </div> <br><br>



      <div class="mb-3 row">

        <input type="text" class="form-control" style="width: 70%; margin-left: 15%;" name="name" id="name"
          placeholder="Name">
      </div>



      <div class="mb-3 row">
        <input type="email" class="form-control" style="width: 70%; margin-left: 15%" name="email" id="Email"
          placeholder="Email">
      </div>


      <div class="mb-3 row">

        <input type="tel" class="form-control" style="width: 70%; margin-left: 15%" id="mobile" name="mobile"
          placeholder="Mobile No.">
      </div>


      <div class="mb-3 row">

        <input type="date" class="form-control" style="width: 70%; margin-left: 15%" id="dob" name="dob"
          placeholder="Date of Birth">
      </div>


      <div class="mb-3 row">

        <input type="password" class="form-control" style="width: 70%; margin-left: 15%" id="inputPassword" name="pass"
          placeholder="Password">
      </div>


      <div class="mb-3 row">

        <input type="password" class="form-control" style="width: 70%; margin-left: 15%" id="confirmPassword"
          name="c_pass" placeholder="Confirm Password">
      </div>

      <br>
      <br>

      <div class="mb-3 row">

        <input type="submit" class="form-control" style="width: 30%; margin-left: 35%" id="button" onclick="validreg()" value="Register">
      </div>

  </form>


<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "web_prog";

$conn = mysqli_connect($server,$username,$password, $database);


  $name = $email = $mobile = $dob = $pass = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["name"])){

        $nameErr = "Please enter a valid name";

    }else{

        $name = test_input($_POST["name"]);

        if(!preg_match("/^[a-zA-Z-']*$/",$name)){

            $nameErr = "Only letters and white spaces allowed";

        }

    }

  
  $name = test_input($_POST['name']);
  $email = test_input($_POST['email']);
  $mobile = test_input($_POST['mobile']);
  $dob = test_input($_POST['dob']);
  $pass = test_input($_POST['pass']);

  $sql = "INSERT INTO `web_prog`.`registration` ( `name`, `email`, `mobile`, `dob`, `pass`) VALUES ('$name', '$email', '$mobile', '$dob', '$pass');";

  mysqli_query($conn,$sql);

  $conn->close();

 
  
}


function test_input($data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;

}

?>










  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>