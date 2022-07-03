<!DOCTYPE html>
<html lang="en">
  <head>
       <meta charset="UTF-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <title>My Orders</title>
       <link rel="stylesheet" href="Styles/MyOrders/MyOrders.css?v=<?php echo time(); ?>"/>
       <link rel="stylesheet" href="Styles/Homepage/normalize.css" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

<!--Body Starts Here-->
<body>

<!--header-->
    <header>
      <img class="logo" src="images/Homepage/onlinelogomaker-091721-1248-1692-2000-transparent.png" alt="logo of glowy shopping mall"/>
        
        <ul class="navigation_links">
        <li><a href="homepage.php"><button>Home</button></a></li>
              <li><a href="feedback.php"><button>feedback</button></a></li>
              
              <li><a href="SellerLogin.html"><button>Seller&nbsp;login</button></a></li>
              <li><a href="ContactUs.html"><button>Contact&nbsp;us</button></a></li>
        </ul>

        <!--cart button-->
        <p class="username"><?php session_start(); echo" Hello ". $_SESSION['username'];
?></p>      
      <div class="button_list">
        <a href="logout.php"><button> Logout </button></a>
      </div>
   

    </header>
<!--Header ends-->


<!--Category Buttons-->
    <ul class="catagory">
      <img src="images/Homepage/outline_list_black_24dp.png" alt="">
      <li><a href="product.php"><button>Electronic&nbsp;Devices</button></a></li>
      <li><a href="Additional.php"><button>Pay&nbsp;Bills</button></a></li>
      <li><a href="product.php"><button>Health&Beauty</button></a></li>
      <li><a href="product.php"><button>Groceries</button></a></li>
      <li><a href="product.php"><button>Home&Life&nbsp;Style</button></a></li>
      <li><a href="product.php"><button>Fashon</button></a></li>
    </ul>

    <main>
        <h1 class="name">MY ORDERS</h1>
<?php

$username=$_SESSION['username'];
$conn=mysqli_connect('localhost','root','','glowydbms') or die("connection failed" .mysqli_connect_error());
$sql1="SELECT * FROM `customershipping` WHERE `username`='$username' ";?>
 
 <table id="customers">
     <th> OrderID </th>
     <th> E-mail </th>
     <th> Shipping Address </th>
     <th> ZIP </th>

<?php
if (mysqli_multi_query($conn, $sql1)) { 

    do {
      // Store first result set
      if ($result = mysqli_store_result($conn)) {  

        while ($row = mysqli_fetch_row($result)) {
            echo"<tr>";
            echo "<td>".$row[0] ."</td>";
            echo "<td>".$row[3] ."</td>";
            echo "<td>".$row[4] ." ,";
            echo $row[5]." ,";
            echo $row[6]." ,";
            echo $row[7] ."</td>";
            echo"<td>". $row[7] ."</td>";
            
            
            echo"</tr>";
            
         
        }
        mysqli_free_result($result);
      }
     
       //Prepare next result set
    } while (mysqli_next_result($conn));
  }


 ?>





</table> 

    </main>
   <!-- Footer Starts  -->
<footer>
<div class="footer">
    <div class="contain">
    <div class="col">

      <h1>Glowy Online Shopping</h1>
      <ul>
        <li>About Glowy</li>
        <li>Mission</li>
        <li>Services</li>
        <li>privacy</li>
        <li>Get in touch</li>
      </ul>

    </div><div class="col">
      <h1>Products</h1>
      <ul>
        <li>About Products</li>
        <li>Quality</li>
        <li>Services</li>
        <li>Social</li>
        <li>Get in touch</li>
      </ul>

    </div><div class="col">
      <h1>Accounts</h1>
      <ul>
        <li>About Customer Accounts</li>
        <li>seller Accounts</li>
        <li>Services</li>
        <li>Social</li>
        <li>Get in touch</li>
      </ul>

    </div><div class="col">
      <h1>Resources</h1>
      <ul>
        <li>Webmail</li>
        <li>Redeem code</li>
        <li>WHOIS lookup</li>
        <li>Site map</li>
        <li>Applications</li>
        <li>Emails</li>
      </ul>

    </div><div class="col">
      <h1>Support</h1>
      <ul>
        <li>Contact us</li>
        <li>Web chat</li>
        <li>Open ticket</li>
        <a href="P&P.php"><li>privacy & policys</li></a>
      </ul>
    </div>

    <div class="col social">
      <h1>Social</h1>
      <ul>
          <!-- Add social media icons -->
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-google"></a></li>
            <li><a href="#" class="fa fa-android"></a></li>
            <li><a href="#" class="fa fa-youtube"></a></li>
            <li><a href="#" class="fa fa-instagram"></a></li>
      </ul>
    </div>

    <div class ="payment-icons">
            <p>More about paymnet methods</p>
            <i class="fa fa-cc-visa" style="font-size:40px;color:aliceblue"></i>
            <i class="fa fa-cc-amex" style="font-size:40px;color:aliceblue"></i>
            <i class="fa fa-cc-discover" style="font-size:40px;color:aliceblue"></i>
            <i class="fa fa-cc-mastercard" style="font-size:40px;color:aliceblue"></i>
            <i class="fa fa-cc-paypal" style="font-size:40px;color:aliceblue"></i>
            <i class="fa fa-credit-card" style="font-size:40px;color:aliceblue"></i>
            <i class="fa fa-paypal" style="font-size:40px;color:aliceblue"></i>    
    </div>
</footer>
  <!-- Footer Ends  -->
        
    </body>
    </html>