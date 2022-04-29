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