<?php

session_start();

if ($_SESSION["user_type"] != "admin") {
  header("location: login.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>

<script src="validation.js"></script>

<style>

    *{

        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
        

    }

    body{

        background: #f3f5f9;

    }

    .wrapper{

        display: flex;
        position: relative;

    }

    .wrapper .sidebar{

        position: fixed;
        width: 250px;
        height: 100%;
        background: #4b4276;
        padding: 30px 0;

    }

    .wrapper .sidebar h2{
    
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 30px;
    
    }

    .wrapper .sidebar ul li{

        padding: 15px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        border-top: 1px solid rgba(255, 255, 255, 0.05);

    }

    .wrapper .sidebar ul li a{

         
        color: #bdb8d7;
        display: block;

    }

    .wrapper .sidebar ul li a .fas{

        width: 25px;


    }

    .wrapper .sidebar ul li:hover{

        background: #594f8d;

    }

    .wrapper .sidebar ul li:hover a{


        color: #fff;

    }

    .wrapper .main_content{

        width: 100%;
        margin-left: 250px;

    }

    .wrapper .main_content .header{

        padding: 20px;
        background: #fff;
        color: #717171;
        border-bottom: 1px solid #e0e4e8;

    }

    .wrapper .main_content .info{

        margin: 20px;
        color: #717171;
        line-height: 25px;

    }

    .wrapper .main_content .info div{

        margin-bottom: 20px;

    }
    a, a:hover, a:focus, a:active {
     text-decoration: none;
     color: inherit;
 }
</style>

<?php

require_once "config.php";

  // If there were no errors, go ahead and insert into the database
  if( isset($_POST['submit']))
  {   
    $category = $_POST['cname'];
    
    
    $sql = "INSERT INTO `library`.`categories` (`category_name`) VALUES (?);";
      // $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
      $stmt = mysqli_prepare($conn, $sql);
      if ($stmt)
      {
          mysqli_stmt_bind_param($stmt, "s", $param_name);

          // Set these parameters
          $param_name = $category;
          

          // Try to execute the query
          if (mysqli_stmt_execute($stmt))
          {
                echo '<script>alert("Category Inserted")</script>';
          }
          else{
              echo "Something went wrong... cannot redirect!";
          }
      }
      mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);

?>

<body>
    

    <div class="wrapper">


    <div class="sidebar">

    <h2>
                <a class="a" href="admin.html">Admin Panel</a>
            </h2>

            <ul>

            <li>
    <a href="add_books.php"><i class="fas fa-solid fa-book"></i>Add Books</a>
</li>

<li>
    <a href="update_categories.php"><i class="fas fa-solid fa-bars"></i>Add Categories</a>
</li>

<li>
    <a href="view_users.php"><i class="fas fa-solid fa-user"></i>View Users</a>
</li>

<li>
    <a href="view_categories.php"><i class="fas fa-solid fa-list"></i>View Categories</a>
</li>

<li>
    <a href="admin_viewbooks.php"><i class="fas fa-solid fa-eye"></i>View Books</a>
</li>

</ul>



</div>



        <div class="main_content">

        <div class="header">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container-fluid">
                    <a href="ubaidbaby.html" class="navbar-brand"></a>
                    <button type="button" data-toggle="collapse" data-target="#navbar-menu" class="navbar-toggler">
                         <span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="navbar-nav mr-auto">
                            <li><a class="nav-link">DISCLAIMER: Enter data with no redudancy and verified data</a></li>

                        </ul>

                        
        
                        <ul class="navbar-nav ms-auto ">
                            
                            <li class="nav-item">
                            <a href="logout.php" class="nav-link">Sign-Out</a>
                        
                        </ul>
                    </div>
                </div>
            </nav>

            </div>

            <div class="info" id="section1">

                <div>

                                   
                  <form class="center" name="form1" action="" method="POST" onsubmit="return addcategory()">
                  
                    <div class="mb-3">
                      
                      <input type="text" class="form-control" name="cname" id="exampleFormControlInput1" placeholder="Category name" style="width: 50%;">
                    </div>
                  
                  
                        <input type="submit" name = "submit" class="btn btn-outline-dark" value="Add Category">
                        
                        
                  
                  
                  </form>

                    <br>

                  <h3>Excel Upload</h3>


                    <form method="POST" action="again2.php" enctype="multipart/form-data">



                        <div class="form-group">

                            <label>Upload Excel File</label>
                            <input type="file" name="file" class="form-control" accept=".csv">

                        </div>

                        <div class="form-group">

                            <input type="submit" name="upload" value="Import from .csv" class="btn btn-success"></button>

                        </div>

                </div>

            </div>

        </div>



    </div>

    <script src="script.js"></script>
</body>
</html>