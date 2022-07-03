
<?php
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];

$conn=mysqli_connect('localhost','root','','glowydbms') or die("connection failed" .mysqli_connect_error());
$sql = "select *from glowy where User_Name = '$username' and Password = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
 

if($count == 0)
{  
    //echo "<h1><center>Login successful</center></h1>";
    header("Location:login.php");
}  
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Additional Payments</title>
    <link rel="stylesheet" href="Styles/Additional payment/Additional.css?v=<?php echo time(); ?>">
    
       
    
</head>
<body>
    <!--header starts here-->
    <header>
        <section class="headerp1">
          <div class="logo">
            <a href="Homepage.php"><img
              class="logoimg"
              src="images/All items/onlinelogomaker-091721-1248-1692-2000-transparent.png"
              alt="logo of glowy online shopping mall"
            /></a>
          </div>
  
          <div class="navlinks">
            <ul class="navigation_links">
            <li><a href="Homepage.php"><button>Home</button></a></li>
            <li><a href="feedback.php"><button>feedback</button></a></li>
              
              <li><a href="SellerLogin.html"><button>Seller&nbsp;login</button></a></li>
              <li><a href="ContactUs.html"><button>Contact&nbsp;us</button></a></li>
            </ul>
          </div>
          <p class="username"><?php  echo" Hello ". $_SESSION['username'];
?></p>  
          <div class="loginbutton"> <a href="logout.php"><button>Logout</button></a></div>
        </section>
        <section class="headerp2">
          <img src="images/All items/outline_list_black_24dp.png" alt="option icon">
          <div class="categorybtns">
              
              <ul class="catagory">
                 
              <li><a href="product.php"><button>Electronic&nbsp;Devices</button></a></li>
      <li><a href="Additional.php"><button>Pay&nbsp;Bills</button></a></li>
      <li><a href="product.php"><button>Health&Beauty</button></a></li>
      <li><a href="product.php"><button>Groceries</button></a></li>
      <li><a href="product.php"><button>Home&Life&nbsp;Style</button></a></li>
      <li><a href="product.php"><button>Fashon</button></a></li>
              </ul>
          </div>
        </section>
      </header>
      <!--header ends here-->

      <!--main page begins here-->
      <main>
      <div class="header">
        <h1>GLOWY</h1>
        <p>You can pay your bills easily here!</p>
    </div>

    <div class="container1">
      <div class="select-box">
        <div class="options-container">

          <div class="option">
            <input type="radio" class="radio" id="current" name="category" />
            <label for="current" onclick="changeTextare">Electricity</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="water" name="category" />
            <label for="water">Water</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="mobile" name="category" />
            <label for="mobile">Mobile</label>
          </div>
        </div>

        <div class="selected">
          Select Billing type
        </div>
      </div>
    </div>

        <form  method="POST">
            <div class="container"></div>
                <label for="name"></label>
                <input type="text" id="name" placeholder="Enter name" required><br>
                <br>

                <label for="number"></label>
                <input type="text" id="number" placeholder="Enter Mobile Number" required><br>
                <br>

                <label for="amount"></label>
                <input type="text" id="amount" placeholder="Enter amount" required><br>

                <div class="clearfix">
                    <a href="Homepage.php"><button type="submit" class="cnfbtn">Confirm</button></a>
                </div>
            </div>
        </form>
    </main>
      <!--main page endns here-->
     <script src= "JS/Additional payment/Additional.js"></script>
</body>
</html>