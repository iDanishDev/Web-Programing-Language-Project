<?php

session_start();


?>

<?php

$servername='localhost';
$username="root";
$password="";
 
try
{
    $con=new PDO("mysql:host=$servername;dbname=library",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}


$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from books where book_name like '%$search%' or book_name like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($employee_details);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>
<html>
<head>
<title>Search Books</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    

        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
<style>
.container{
    width:70%;
    height:30%;
    padding:20px;
}
</style>
</head>
 
<body>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="user_myprofile.php" class="navbar-brand">USER PANEL</a>
            <button type="button" data-toggle="collapse" data-target="#navbar-menu" class="navbar-toggler">
                 <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav mr-auto">
                <li><a href="user_myprofile.php" class="nav-link">My Profile</a></li>
                    <li><a href="user_viewbooks.php" class="nav-link">View Books</a></li>
                    <li><a href="user_searchbooks.php" class="nav-link active">Search Books</a></li>
                    <li><a href="user_viewcategories.php" class="nav-link">View Categories</a></li>
                </ul>

                <ul class="navbar-nav ms-auto ">
                    
                    <li class="nav-item">
                    <a href="logout.php" class="nav-link">Sign-Out</a>
                
                </ul>
            </div>
        </div>
    </nav>



    <div class="container">
    

    

    <br/><br/>
    <form class="form-horizontal" action="#" method="post">

    <div class="mb-3">
        <div class="form-group">
            
        <label for="exampleFormControlInput1" class="form-label">Book Name</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="search" placeholder="Book name" style="width: 100%;">
            </div>
            <br>
            <div class="col-sm-2">
              <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
                 
    </div>
    </form>
    <br/><br/>
    <h3><u>Search Result</u></h3><br/>
    <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th>Sr No.</th>
            <th>Book Name</th>
            <th>Genre</th>
            <th>Author name</th>
            <th>Publisher</th>
            <th>ISBN</th>
          </tr>
        </thead>
        <tbody>
                <?php
                 if(!$employee_details)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{
                    foreach($employee_details as $key=>$value)
                    {
                        ?>
                    <tr>

                        <td><?php echo $value['sr_no'];?></td>
                        <td><?php echo $value['book_name'];?></td>
                        <td><?php echo $value['genre'];?></td>
                        <td><?php echo $value['author_name'];?></td>
                        <td><?php echo $value['publisher'];?></td>
                        <td><?php echo $value['isbn'];?></td>
                        
                    </tr>
                         
                        <?php
                    }
                     
                 }
                ?>
             
         </tbody>
      </table>
    </div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>