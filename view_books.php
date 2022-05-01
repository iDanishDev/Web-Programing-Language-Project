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


<body>
    

    <div class="wrapper">


          <div class="sidebar">

          <h2>
                <a class="a" href="admin.php">Admin Panel</a>
            </h2>

            <ul>

<li>
    <a href="add_books.php"><i class="fas fa-solid fa-book"></i>Add Books</a>
</li>

<li>
    <a href="view_books.php"><i class="fas fa-light fa-book-open"></i>Update Books</a>
</li>

<li>
    <a href="update_categories.php"><i class="fas fa-solid fa-bars"></i>Update Categories</a>
</li>

<li>
    <a href="view_users.php"><i class="fas fa-solid fa-user"></i>View Users</a>
</li>

<li>
    <a href="view_categories.php"><i class="fas fa-solid fa-list"></i>View Categories</a>
</li>

</ul>



        </div>



        <div class="main_content">

            <div class="header">

                DISCLAIMER: Enter data with no redudancy and verified data

            </div>

            <div class="info" id="section1">

                <div>

                <form class="center" name="view_book">

<div class="mb-3">
  
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Book name" name="name" style="width: 50%;">
</div>

<div class="mb-3">
  
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Author name" name="a_name" style="width: 50%;">
</div>

<div class="mb-3">
  
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Publisher" name="publisher" style="width: 50%;">
</div>

<div class="mb-3">
  
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ISBN code" name="isbn" style="width: 50%;">
</div>


    <button type="button"  class="btn btn-secondary" onclick="validatebooks()">Update Book</button>
    <button type="button"  class="btn btn-danger" onclick="deletebooks()">Delete Book</button>
    



</form>

                </div>

            </div>

        </div>



    </div>

    <script src="script.js"></script>
    <script src="validate_viewbooks.js"></script>
</body>
</html>