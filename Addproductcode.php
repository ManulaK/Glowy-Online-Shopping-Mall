<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "glowydbms";


//connect to mysql server
$conn = new mysqli($server, $username, $password, $db_name);


//check if any connection error was encountered
if( $conn->connect_error){
  die("Error: Could not connect to database." . $conn->connect_error);
}

if(isset($_POST['submitbtn'])){
  
  if(!empty($_POST['Sellername']) && !empty($_POST['Shopname']) && !empty($_POST['title']) && !empty($_POST['P_catagory'])
     && !empty($_POST['P_des']) && !empty($_POST['P_price']) && !empty($_POST['P_qty'])){

    $SellerName = $_POST['Sellername'];
    $Shopname = $_POST['Shopname'];
    $ProductTitle = $_POST['title'];
    $Catagory = $_POST['P_catagory'];
    $AboutProduct = $_POST['P_des'];
    $Productprice = $_POST['P_price'];
    $ProductQuantity = $_POST['P_qty'];

    //File Upload 
    //file name with a random number so that similar dont get replaced
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

    //temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];


    //upload directory path
    $uploads_dir = 'images/Homepage/';

    //TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);


    $sql = "INSERT INTO shop(SellerName,Shopname,ProductTitle,Category,AboutProduct,Productprice,ProductQuantity,product_img)
    values('$SellerName','$Shopname','$ProductTitle','$Catagory','$AboutProduct','$Productprice','$ProductQuantity','$pname')";

    if($conn->query($sql)){
      echo "<script>alert('Form Submitted Success!');</script>";
      echo "<script>alert('File Sucessfully uploaded');</script>";
    }else{
      echo "<script>alert('Form Not submitted!');</script>";
    }
  }
} 

//Get values from checkboxes
if(isset($_POST['submitbtn'])){
    foreach($_POST['check_list'] as $check){
      echo "check = $check<br>"; 
    }
}else{
      echo "Check list is empty";
    }

$conn->close();

?>