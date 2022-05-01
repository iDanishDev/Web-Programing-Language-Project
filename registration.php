<?php

session_start();

// check if the user is already logged in
if(isset($_SESSION['email']))
{
    header("location: index.php");
    exit;
}
?>

<?php
require_once "config.php";

$email ="";
$email_err= "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty($_POST["email"])){
        $email_err = "Email cannot be blank";
    }
    else{
        $sql = "SELECT `SrNo` FROM `users` WHERE `User_Email` = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set the value of param email
            $param_username = trim($_POST['email']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $email_err = "An account with this email already exists"; 
                }
                else{
                    $email = $_POST['email'];
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


  // If there were no errors, go ahead and insert into the database
  if(empty($email_err))
  {   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['ph-no'];
    $pass = $_POST['password'];
    
    $sql = "INSERT INTO `library`.`users` (`User_Name`, `User_Email`, `User_Phone`, `User_Password`) VALUES (?, ?, ?, ?);";
      // $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
      $stmt = mysqli_prepare($conn, $sql);
      if ($stmt)
      {
          mysqli_stmt_bind_param($stmt, "ssis", $param_name, $param_email, $param_phone, $param_password);

          // Set these parameters
          $param_name = $name;
          $param_email = $email;
          $param_phone = $phone;
          $param_password = password_hash($pass, PASSWORD_DEFAULT);
          

          // Try to execute the query
          if (mysqli_stmt_execute($stmt))
          {
              header("location: login.php");
          }
          else{
              echo "Something went wrong... cannot redirect!";
          }
      }
      mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>

    <!--Bootstrap stylesheet-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!--Bootstrap icons-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <!--Bootstrap JQuery-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>

    <!--CSS-->
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="stylesheet" href="styles/form-style.css" />
  </head>

  <body>


    <!-- header -->
    <section id="navigation">
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
          

        
            
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="bi bi-person-circle profile-icon"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a href="" class="dropdown-item active">Sign-Up</a></li>
                  <li><a href="login.php" class="dropdown-item">Log-In</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a href="" class="dropdown-item disabled">My Profile</a>
                  </li>
                  <li>
                    <a href="" class="dropdown-item disabled">Sign-Out</a>
                  </li>
                </ul>
              </li>
            
          


        </ul>

      </div>
    </div>
  </nav>


    </section>

    <!-- form -->
    <section id="signup">
      <form name="signup_form" action="" onsubmit="return submitVerification()" method="post">
        <div class="card">
          <div class="card-header">
            <h3>Registration</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name" class="form-label" required>Name: </label>
              <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
              <label for="email" class="form-label" required>Email: </label>
              <input type="email" class="form-control" name="email" />
            </div>
            <div class="form-group">
              <label for="ph-no" class="form-label" required>
                Phone Number:
              </label>
              <input
                type="number"
                class="form-control"
                name="ph-no"
                minlength="10"
              />
            </div>
            <div class="form-group">
              <label for="password" class="form-label" required
                >Password:
              </label>
              <input
                type="password"
                class="form-control"
                name="password"
                id="form-password"
              />
              <ul>
                <li id="pass-length" class="invalid">
                  Password should have 8 or more characters
                </li>
                <li id="pass-uppercase" class="invalid">
                  It should contain at least one uppercase character
                </li>
                <li id="pass-lowercase" class="invalid">
                  It should contain at least one lowercase character
                </li>
                <li id="pass-number" class="invalid">
                  It should contain at least one number
                </li>
              </ul>
            </div>
            <div class="form-group">
              <label for="confirm-password" class="form-label" required
                >Confirm Password:
              </label>
              <input
                type="password"
                class="form-control"
                name="confirm-password"
                id="form-confirm-password"
              />
            </div>
          </div>
          <div class="card-footer text-center">
            <input type="submit"/>
          </div>
        </div>
      </form>

      <!-- * Alert for form -->
      <div id="liveAlertPlaceholder" class="formAlert"></div>
    </section>

    <!-- footer -->
    <section></section>

    <script>
      var nameOK = false;
      var emailOK = false;
      var phoneOK = false;
      var passOK = false;
      var confrimPassOK = false;

      document.getElementById("form-password").onkeyup = function () {
        var passLength = false;
        var passLowerCase = false;
        var passUpperCase = false;
        var passNumber = false;

        var password = document.getElementById("form-password").value;

        if (password.length >= 8) {
          document.getElementById("pass-length").classList.remove("invalid");
          document.getElementById("pass-length").classList.add("valid");
          passLength = true;
        } else {
          document.getElementById("pass-length").classList.remove("valid");
          document.getElementById("pass-length").classList.add("invalid");
          passLength = false;
        }

        var lowerCaseLetters = /[a-z]/g;
        if (password.match(lowerCaseLetters)) {
          document.getElementById("pass-lowercase").classList.remove("invalid");
          document.getElementById("pass-lowercase").classList.add("valid");
          passLowerCase = true;
        } else {
          document.getElementById("pass-lowercase").classList.remove("valid");
          document.getElementById("pass-lowercase").classList.add("invalid");
          passLowerCase = false;
        }

        var upperCaseLetters = /[A-Z]/g;
        if (password.match(upperCaseLetters)) {
          document.getElementById("pass-uppercase").classList.remove("invalid");
          document.getElementById("pass-uppercase").classList.add("valid");
          passUpperCase = true;
        } else {
          document.getElementById("pass-uppercase").classList.remove("valid");
          document.getElementById("pass-uppercase").classList.add("invalid");
          passUpperCase = false;
        }

        var numbers = /[0-9]/g;
        if (password.match(numbers)) {
          document.getElementById("pass-number").classList.remove("invalid");
          document.getElementById("pass-number").classList.add("valid");
          passNumber = true;
        } else {
          document.getElementById("pass-number").classList.remove("valid");
          document.getElementById("pass-number").classList.add("invalid");
          passNumber = false;
        }

        if (
          passNumber == true &&
          passLength == true &&
          passUpperCase == true &&
          passLowerCase == true
        ) {
          passOK = true;
        }
      };

      function submitVerification() {
        var name = document.forms["signup_form"]["name"].value;
        var ph_no = document.forms["signup_form"]["ph-no"].value;
        var pass = document.forms["signup_form"]["password"].value;
        var confirm_pass =
          document.forms["signup_form"]["confirm-password"].value;

        // ! Checking for empty inputs

        // ! checking for content
        var numbers = /[0-9]/g;
        if (name.match(numbers)) {
          alertPlaceholder.innerHTML =
            '<div class="alert alert-danger alert-dismissible" role="alert">' +
            "Name Field should not contain Numeric characters" +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
          return false;
        } else nameOK = true;

        if (ph_no.length < 10 || ph_no.length > 10) {
          alertPlaceholder.innerHTML =
            '<div class="alert alert-danger alert-dismissible" role="alert">' +
            "The Number should be 10 characters long. Do not enter '0' or '+91' in the beginning" +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
          return false;
        } else phoneOK = true;

        if (passOK == false) {
          alertPlaceholder.innerHTML =
            '<div class="alert alert-danger alert-dismissible" role="alert">' +
            "The password does not meet the required constraints. Please re-enter the password so that it meets the required constraints." +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
          return false;
        }

        if (confirm_pass != pass) {
          alertPlaceholder.innerHTML =
            '<div class="alert alert-danger alert-dismissible" role="alert">' +
            "The confirm password and password do not match. Kindly check and enter again!" +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
          return false;
        } else confrimPassOK = true;

        if (
          phoneOK == true &&
          nameOK == true &&
          passOK == true &&
          confirm_passOK == true
        ) {
          return true;
        } else {
          return false;
        }
      }

      var alertPlaceholder = document.getElementById("liveAlertPlaceholder");
    </script>
  </body>
</html>


