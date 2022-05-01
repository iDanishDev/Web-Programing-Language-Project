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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>View Books</title>
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
                <li><a href="user_myprofile.php" class="nav-link">My Profile</a></li>
                    <li><a href="user_viewbooks.php" class="nav-link active">View Books</a></li>
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
                  $sql = "SELECT * FROM books ";
                  $result = $con->query($sql);
                  $fieldValDemo = mysqli_fetch_row($result);

                  
                $con->close();

                   

              ?> 

    <div class="body" name="mainContent">

    <table class="table">
        <thead>
			<tr>
				<th>Sr No.</th>
				<th>Book name</th>
				<th>Genre</th>
				<th>Author Name</th>
				<th>Publisher</th>
				<th>ISBN</th>
				
			</tr>
		</thead>

        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "library";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM books";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["sr_no"] . "</td>
                    <td>" . $row["book_name"] . "</td>
                    <td>" . $row["genre"] . "</td>
                    <td>" . $row["author_name"] . "</td>
                    <td>" . $row["publisher"] . "</td>
                    <td>" . $row["isbn"] . "</td>
                    
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
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