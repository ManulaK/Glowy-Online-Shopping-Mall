<?php      
    
if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','root','','glowydbms') or die("connection failed" .mysqli_connect_error());



    $username = $_POST['username'];  
    $password = $_POST['password'];  
       
   
     
        $sql = "select *from seller where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
         
       
        if($count == 1)
        {  
            //echo "<h1><center>Login successful</center></h1>";
            header("Location:Addproduct.php");
            session_start();
            $_SESSION['susername']=$username;
            $_SESSION['spassword']=$password;
        }  
        else
        {  
            header("location:SellerLogin.html");
            echo "<h1 style = position:absolute;color:red;text-align:center;left:25%;top:70%;>Login failed.Invalid username or password</h1>";  
        }  }  
    
?>  