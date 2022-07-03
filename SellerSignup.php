<?php


if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','root','','glowydbms') or die("connection failed" .mysqli_connect_error());



}

 if (isset($_POST['firstname']) && isset($_POST['lastname'])&& isset($_POST['email']) && isset($_POST['mobile']) && isset ($_POST['username']) && isset($_POST['password']) && isset($_POST['password2']  ))
{
    
    if($stmt=$conn-> prepare('SELECT username,password from seller where username = ?')){
        $stmt->bind_param('s',$_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows>0){
            echo'username already exists';
        
        }
else{

if($_POST['password'] != $_POST['password2']){
    exit('password does not match');
}

else{
    $firstname=($_POST['firstname']);
    $lastname=($_POST['lastname']);
    $email=($_POST['email']);
    $mobile=($_POST['mobile']);
    $username=($_POST['username']);
    
    $password=($_POST['password']);

    $sql="INSERT INTO `Seller`(`firstname`,`lastname`,`email`,`mobilenumber`,`username`,`password`) VALUES ('$firstname','$lastname','$email','$mobile','$username','$password')";

    $query =mysqli_query($conn,$sql);
    if($query){
        echo 'entry successfull';
        header ("location:SellerLogin.html");

    } 
    else{
        echo 'error occored';
    }

}
}
}}


?>


