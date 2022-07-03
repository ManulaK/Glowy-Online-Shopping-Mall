<?php
if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['submit']))
{
    $conn=mysqli_connect('localhost','root','','glowydbms') or die("connection failed" .mysqli_connect_error());
}
if (isset($_POST['first']) && isset($_POST['last'])&& isset($_POST['username']) && isset($_POST['email']) && isset ($_POST['psw']) && isset($_POST['confirmpassword']))
{ if($stmt=$conn-> prepare('SELECT User_Name,Password from glowy where User_Name = ?')){
    $stmt->bind_param('s',$_POST['username']);
    $stmt->execute();
    $stmt->store_result();
}
    if($stmt->num_rows>0){
        echo'username already exists';
    
    }
    else{
    if($_POST['psw'] != $_POST['confirmpassword'])
    {
    exit('password does not match');
    }
    else
    {
        $firstname=($_POST['first']);
        $lastname=($_POST['last']);
        $username=($_POST['username']);
        $email=($_POST['email']);
        $password=($_POST['psw']);
        $sql="INSERT INTO `glowy`(`First_Name`,`Last_Name`,`User_Name`,`E_mail`,`Password`) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";
        $query =mysqli_query($conn,$sql);
        if($query)
        {
            echo 'Entry successfull';
            header('location: login.php');
        }
        else
        {
            echo 'Error occored';
        }
    }
}
}
?>