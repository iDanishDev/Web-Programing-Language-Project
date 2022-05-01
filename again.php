<?php

$path = "C:/xamp ka baccha/htdocs/WPL/WPL-Project/upload/";

 
// list of css file names located inside the folder
$files = glob($path.'/*');
 
// delete all the files from the list 
foreach($files as $file){
 if(is_file($file)){
 unlink($file);
 }
}
 
// echo "Files deleted successfully.";

if( isset($_POST['upload'])){

    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_loc = $_FILES['file']['tmp_name'];
    $file_store = "upload/".$file_name;

    if(move_uploaded_file($file_tem_loc, $file_store)){

        // echo("Files are Uploaded");

    }   

};

// echo "<br>";



$local_dir = 'C:/xamp ka baccha/htdocs/WPL/WPL-Project/upload/';

$filess = scandir($local_dir);

$filess = array_diff($filess, ['.','..']);
$filess_string = implode("",$filess);






$dbHost = "localhost";
$dbDatabase = "library";
$dbPasswrod = "";
$dbUser = "root";


$conn = mysqli_connect($dbHost, $dbUser, $dbPasswrod, $dbDatabase);


$filename = "{$local_dir}{$filess_string}";
$data = [];


$f = fopen($filename, 'r');

if ($f === false) {
	echo '<script>alert("Please choose file")</script>';
}

while (($row = fgetcsv($f)) !== false) {
	$data[] = $row;
    
    

}

for($i = 1; $i < count($data); $i++) {

    $datayum = $data[$i][0];
    $datayummy = $data[$i][1];
    $datayummy1 = $data[$i][2];
    $datayummy2 = $data[$i][3];
    
    $sql = "INSERT INTO `books` (`book_name`,`author_name`,`publisher`,`genre`) VALUES ('$datayum','$datayummy','$datayummy1','$datayummy2')";
    
    
    if (mysqli_query($conn, $sql)) {

        // echo "New record created successfully <br>";

       }
    else{

        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);

       }
};

// print_r($data);
// print_r($data[2][1]);


fclose($f);
$conn->close();

echo '<script>alert("Book Inserted")</script>';


?>
<?php

sleep(4);
header("location: add_books.php");

?>

