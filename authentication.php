<?php      
    include('login.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password); 

     
        $sql = "select * from glowy where User_Name = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1)

        {  
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            
           
            header("Location:Homepage.php");
        }  
        else
        {  
            echo "<h1 style = position:absolute;color:red;text-align:center;left:25%;top:70%;>Login failed.Invalid username or password</h1>";  
        }    
?>  


