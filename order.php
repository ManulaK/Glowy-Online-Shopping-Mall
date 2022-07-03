<?php
               
 







if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['gl'])){

$conn=mysqli_connect('localhost','root','','glowydbms') or die("connection failed" .mysqli_connect_error());





}



if (isset($_POST['fullname']) && isset($_POST['email'])&& isset($_POST['address']) && isset($_POST['city']) && isset ($_POST['state']) && isset($_POST['zip']))

{



session_start();
$username=$_SESSION['username'];
    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $address  = $_POST['address'];
    $city     = $_POST['city'];
    $state    = $_POST['state'];
    $zip      = $_POST['zip'];
    


$sql="INSERT INTO `customershipping`(`username`,`fullname`,`email`,`address`,`city`,`state`,`zip`) VALUES ('$username','$fullname','$email','$address','$city','$state','$zip')";



$query =mysqli_query($conn,$sql);

if($query){
 

 echo '<script>window.location="ordersuccessfull.html"</script>';



}

else{

echo 'error occored';

}



}







?>