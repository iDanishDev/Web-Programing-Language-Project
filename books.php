<?php

session_start();

// check if the user is already logged in
if(isset($_SESSION['email']))
{
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<body>

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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="books.php">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="support.php">Support</a>
          

        
            
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
                  <li><a href="registration.php" class="dropdown-item">Sign-Up</a></li>
                  <li><a href="login.php" class="dropdown-item">Log-In</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a href="myprofile.php" class="dropdown-item disabled">My Profile</a>
                  </li>
                  <li>
                    <a href="logout.php" class="dropdown-item disabled">Sign-Out</a>
                  </li>
                </ul>
              </li>
            
          


        </ul>

      </div>
    </div>
  </nav>



<style>
  .cards {
    margin: 0 auto;
    max-width: 1000px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(225px, 1fr));
    grid-auto-rows: auto;
    gap: 20px;
    font-family: sans-serif;
    padding-top: 30px;
}

.cards * {
    box-sizing: border-box;
}

.card__image {
    width: 100%;
    height: 150px;
    object-fit: cover;
    display: block;
    border-top: 2px solid #333333;
    border-right: 2px solid #333333;
    border-left: 2px solid #333333;
}

.card__content {
    line-height: 1.5;
    font-size: 0.9em;
    padding: 15px;
    background: #fafafa;
    border-right: 2px solid #333333;
    border-left: 2px solid #333333;
    height: 25vh;
}

.card__content > p:first-of-type {
    margin-top: 0;
}

.card__content > p:last-of-type {
    margin-bottom: 0;
}

.card__info {
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #555555;
    background: #eeeeee;
    font-size: 0.8em;
    border-bottom: 2px solid #333333;
    border-right: 2px solid #333333;
    border-left: 2px solid #333333;
}

.card__info i {
    font-size: 0.9em;
    margin-right: 8px;
}

.card__link {
    color: #64968c;
    text-decoration: none;
}

.card__link:hover {
    text-decoration: underline;
}

h6{

  text-decoration: solid red;

}

</style>

<div class="container">
<br>
<h3>
    Most popular:
  </h3>

  <hr>
</div>





      <div class="cards">
        <div class="card">
          <img class="card__image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1389513301l/20516856.jpg" alt="">
          <div class="card__content">
            <h6>
              Programing in ANSI C
            </h6>
            <p>
              The book ?Programming in ANSI C? has been developed specifically to meet the needs of a first-time learner who is keen to be a programmer.
            </p>
          </div>
          <div class="card__info">
            <div>
              Author Name: Balaguruswamy
            </div>
          </div>
        </div>
        <div class="card">
          <img class="card__image" src="https://www.bookkar.co.in/wp-content/uploads/2018/03/d1-1.jpg" alt="">
          <div class="card__content">
            <h6>
              Object Oriented Programing with C++
            </h6>
            <p>
              Object-oriented programming with C++, 8th edition is here with some valuable updates.
            </p>
          </div>
          <div class="card__info">
            <div>
              Author Name: Balaguruswamy
            </div>
          </div>
        </div>
        <div class="card">
          <img class="card__image" src="https://m.media-amazon.com/images/I/51EWRgaqIKL.jpg" alt="">
          <div class="card__content">
            <h6>
              Programing in Java
            </h6>
            <p>
              The sixth edition of this most trusted book on JAVA for beginners is here with some essential updates.
            </p>
          </div>
          <div class="card__info">
            <div>
              Author Name: Balaguruswamy
            </div>
          </div>
        </div>
        <div class="card">
          <img class="card__image" src="https://www.mheducation.co.in/media/catalog/product/cache/84c63a40cf0771f03c9446b22a7e0f08/9/7/9789352602582_38.jpeg" alt="">
          <div class="card__content">
            <h6>
              Introduction to Computing and Problem Solving using Python
            </h6>
            <p>
              This book is for the students of Engineering– A blend of theory and solved problems will equip the students with the fundamental knowledge and application of the coding concepts.
            </p>
          </div>
          <div class="card__info">
            <div>
              Author Name: Balaguruswamy
            </div>
          </div>
        </div>
        <div class="card">
          <img class="card__image" src="https://hackr.io/blog/media/the-book-of-r.jpg?ezimgfmt=rs:179x227/rscb1/ng:webp/ngcb1" alt="">
          <div class="card__content">
            <h6>
              Programing in R
            </h6>
            <p>
              Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
            </p>
          </div>
          <div class="card__info">
            <div>
              Author Name: Danish
            </div>
          </div>
        </div>
      </div>











<!--



    
      <div class="card mb-3" style=" width: 100vw; height: 35vh;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="bg-img.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

    

      <div class="card mb-3" style=" width: 100vw; height: 35vh;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="bg-img.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

      -->
      

</body>
</html>