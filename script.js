const addBooksContent = `
<script src="validation.js"></script>
<form class="center" name="add_book">

    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name of the Book</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Book name" style="width: 50%;">
      </div>    

    <label>Image of the book:</label><br>
    <input type="file" id="img" style="width: 50%;"><br><br>


    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Author Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="a_name" placeholder="Author name" style="width: 50%;">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Publisher Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="publisherName" placeholder="Publisher" style="width: 50%;">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">ISBN code</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="isbn" placeholder="000-0000000000" style="width: 50%;">
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Computer Engineering</a></li>
            <li><a class="dropdown-item" href="#">Internet Technology</a></li>
            <li><a class="dropdown-item" href="#">Electronics and Telecommunications</a></li>
            <li><a class="dropdown-item" href="#">Mechanical</a></li>
            <li><a class="dropdown-item" href="#">Science and Literature</a></li>
        </ul>
      </div>


      <br>
      <button type="button" class="btn btn-outline-dark" onclick="validate()">Add Book</button>

      
</form>`;

const viewBooksContent = `

<script src="validate_viewbooks.js"></script>
<table border="1px" class="center" style="margin-top: 20px;">

<th style="text-align: center;">Index</th>
<th style="text-align: center;">Book Name</th>
<th>Image</th>
<th style="text-align: center;">Author</th>
<th style="text-align: center;">Publisher</th>
<th style="text-align: center;">ISBN code</th>


<tr align="center">

  <td>
    1
  </td>

  <td>
    Programming in ANSI C
  </td>

  <td>

      <img src="..." alt="img">

  </td>

  <td>
    Balaguruswamy
  </td>

  <td>
    McGraw Hill Education
  </td>

  <td>
    978-9351343202
  </td>

</tr>



<tr align="center">

  <td>
    2
  </td>

  <td>
    Programming in ANSI C++
  </td>

  <td>

      <img src="..." alt="img">

  </td>

  <td>
    Balaguruswamy
  </td>

  <td>
    McGraw Hill
  </td>

  <td>
    978-9389949186
  </td>

</tr>



<tr align="center">

  <td>
    3
  </td>

  <td>
    Programming in Java
  </td>

  <td>

      <img src="..." alt="img">

  </td>

  <td>
    Balaguruswamy
  </td>

  <td>
    McGraw Hill
  </td>

  <td>
    978-9353162344
  </td>


</tr>
</table>

<br>



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
    



</form>`;

const viewUsersContent = `<table border="1px" align="center" style="margin-top: 20px;">

<th style="text-align: center;">Index</th>
<th style="text-align: center;">User Name</th>
<th>Email</th>
<th style="text-align: center;">Mobile No   </th>
<th style="text-align: center;">Date of Birth</th>
<th style="text-align: center;">Password</th>

<tr>

  <td>
    1
  </td>

  <td>
    Danish
  </td>

  <td>

      danish@gmail.com

  </td>

  <td>
    +91 1234567890
  </td>

  <td>
      05-03-2003
  </td>

  <td>
      KentuckyFriedChicken
  </td>

</tr>



<tr>

  <td>
    2
  </td>

  <td>
    YumChum
  </td>

  <td>

      ChumVarun@gmail.com

  </td>

  <td>
    +91 1234567890
  </td>

  <td>
      06-09-2001
  </td>

  <td>
      KentuckyFriedChickenYUMMMMMMM
  </td>

</tr>



<tr>

  <td>
    3
  </td>

  <td>
    Sammy
  </td>

  <td>

      sammy@gmail.com

  </td>

  <td>
    +91 1234567890
  </td>

  <td>
      01-05-2003
  </td>

  <td>
      KentuckyFriedChicken2
  </td>

</tr>

</tr>
</table>
`;

const viewCategoriesContent = `<table border="1px" class="center" style="margin-top: 20px;">

  
<th style="text-align: center;">Category Name</th>


<tr align="center">

  

  <td>
      Computer Engineering
  </td>

 

</tr>



<tr align="center">

  

  <td>
      Internet Technology
  </td>

  

</tr>



<tr align="center">

  

  <td>
      Electronics and Telecommunications
  </td>

  

</tr>

<tr align="center">



<td>
  Mechanical
</td>



</tr>

<tr align="center">



  

  <td>
      Science and Literature
  </td>

  

</tr>

</table>

<br>

<form class="center" name="form1">

<div class="mb-3">
  
  <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Category name" style="width: 50%;">
</div>


    <button type="button" class="btn btn-outline-dark" onclick="addcategory()">Add Category</button>



</form>`;

const section = document.querySelector("#section1");
const slidebar = document.querySelector(".sidebar");

slidebar.addEventListener('click', function(e) {
    if(e.target.textContent === "Add Books"){
        section.innerHTML = addBooksContent
    }else if(e.target.textContent === "View Books"){
        section.innerHTML = viewBooksContent
    }else if(e.target.textContent === "View Users"){
        section.innerHTML = viewUsersContent
    }else if(e.target.textContent === "View Categories"){
        section.innerHTML = viewCategoriesContent
    }

})


