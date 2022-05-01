<?php

session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>My Profile</title>
</head>

<style>

    .center {
  
  margin-right: 10%;
  margin-left: 10vw;
  margin-top: 7vh;
}

</style>

<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="user_myprofile.php" class="navbar-brand">USER PANEL</a>
            <button type="button" data-toggle="collapse" data-target="#navbar-menu" class="navbar-toggler">
                 <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav mr-auto">
                    <li><a href="user_myprofile.php" class="nav-link active">My Profile</a></li>
                    <li><a href="user_viewbooks.php" class="nav-link">View Books</a></li>
                    <li><a href="user_searchbooks.php" class="nav-link">Search Books</a></li>
                    <li><a href="user_viewcategories.php" class="nav-link">View Categories</a></li>
                </ul>

                <ul class="navbar-nav ms-auto ">
                    
                    <li class="nav-item">
                    <a href="logout.php" class="nav-link">Sign-Out</a>
                
                </ul>
            </div>
        </div>
    </nav>


    <?php

                  define('DB_SERVER', 'localhost');
                  define('DB_USERNAME', 'root');
                  define('DB_PASSWORD', '');
                  define('DB_NAME', 'library');


                  $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

                  if($con == false){
                      dir('Error: Cannot connect');
                  }


                  $valuess = $_SESSION['email'];
                  $sql = "SELECT * FROM users WHERE User_Email = '$valuess'";
                  $result = $con->query($sql);
                  $fieldValDemo = mysqli_fetch_row($result);

                  
                $con->close();

                   

              ?> 

    <div class="body" name="mainContent">

        <form class="center">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-2 mt-2">Name:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $fieldValDemo[2]; ?>" disabled placeholder>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-2 mt-2">Email:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $fieldValDemo[3]; ?>" disabled placeholder>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-2 mt-2">Mobile No:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $fieldValDemo[4]; ?>" disabled placeholder>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-2 mt-2">User Type:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $fieldValDemo[6]; ?>" disabled placeholder>
            </div>
          

        </form>

        

    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
</body>

</html>