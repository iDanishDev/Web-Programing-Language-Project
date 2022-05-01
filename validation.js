function validate() {

    var i=69;

    var letters = /^[A-Za-z]+$/;

    if ( (document.forms["add_book"]["name"].value.match(letters)) || (document.forms["add_book"]["a_name"].value.match(letters)) || (document.forms["add_book"]["publisherName"].value.match(letters))  ) {

        i = 1;

    }
    else {


        i = 0;
    }
    

    if ((document.forms["add_book"]["name"].value == "") || (document.forms["add_book"]["a_name"].value == "") || (document.forms["add_book"]["publisherName"].value == "") || (document.forms["add_book"]["isbn"].value == "")) {

        alert("Please enter book details")

    } 
    
    
    else if ((document.forms["add_book"]["isbn"].value.length > 10) || (document.forms["add_book"]["isbn"].value.length < 10)) {

        alert("Invalid ISBN number")

    }

    
    else if(i=='0'){

        alert("Numbers are not allowed")

    }
    
    else {

        alert("Book Added")

    }

    

    

    
    

}

function validatenum(){

    


}

function validatebooks(){

   

    if ((document.forms["view_book"]["name"].value == "") || (document.forms["view_book"]["a_name"].value == "") || (document.forms["view_book"]["publisher"].value == "") || (document.forms["view_book"]["isbn"].value == "")) {

        alert("Please enter book details")

    } 
    
    
    else if ((document.forms["view_book"]["isbn"].value.length > 10) || (document.forms["view_book"]["isbn"].value.length < 10)) {

        alert("Invalid ISBN number")

    }
    
    else {

        alert("Book Updated")

    }

}

function deletebooks(){


    if(document.forms["view_book"]["name"].value == ""){

        alert("Empty field")
    }

    else if((document.forms["view_book"]["name"].value == "Balguruswamy")){

        alert("Book Deleted")

    }

    

}

function updatebooks(){


    if(document.forms["view_book"]["name"].value == ""){

        alert("Empty field")
    }

    else if((document.forms["view_book"]["name"].value == "Balguruswamy")){

        alert("Book Deleted")

    }

    

}

function addcategory(){


    if(document.forms["form1"]["name"].value == ""){

        alert("Empty field")
    }
    else{

        alert("Added category")

    }



}

function validreg(){


    
    if( (document.forms["reg"]["name"].value == "") || (document.forms["reg"]["email"].value == "") || (document.forms["reg"]["mobile"].value == "") || (document.forms["reg"]["dob"].value == "") || (document.forms["reg"]["dob"].value == "") || (document.forms["reg"]["pass"].value == "") || (document.forms["reg"]["c_pass"].value == "") ){

        alert("Empty field")
    }

    else if( (document.forms["reg"]["pass"].value != document.forms["reg"]["c_pass"].value) ){

        alert("Password does not match")

    }

    else if ((document.forms["reg"]["mobile"].value.length > 10) || (document.forms["reg"]["mobile"].value.length < 10)) {

        alert("Invalid mobile number")

    }

    else{

        alert("Registered")

    }


}


function login(){

    if( (document.forms["loginform"]["email"].value == "") || (document.forms["loginform"]["inputPassword"].value == "")){

        alert("Empty field")
        return false;
    }
    else if( (document.forms["loginform"]["email"].value == "admin") || (document.forms["loginform"]["inputPassword"].value == "123") ) {

        alert("Logged In");
        return true;

    }

}