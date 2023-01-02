<!--Including Config php File-->
<?php include 'config.php';?>
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
       <meta charset="UTF-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <title>Glowy Online</title>
       <link rel="stylesheet" href="Styles/Homepage/Styles.css?v=<?php echo time(); ?>"/>
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
              <li><a href="feedback.php"><button>feedback</button></a></li>
              <li><a href="MyOrders.php"><button>My&nbsp;Orders</button></a></li>
              <li><a href="SellerLogin.html"><button>Seller&nbsp;login</button></a></li>
              <li><a href="ContactUs.html"><button>Contact&nbsp;us</button></a></li>
        </ul>

        <!--cart button-->
        <p class="username"><?php echo" Hello ". $_SESSION['username'];
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


<!--Main Starts Here-->
<main >
    <!--Banner -->
    <div class="banner-image">
      <div class="banner-text">    
            <h1 style="font-size:50px">Glowy  Shopping Center</h1>
            <div class="banner-font"><p>-Happiness is not in money, but in shopping-</p><br></div>
            <a href="product.php"><button>Shop now</button></a>
      </div>
    </div>

    <!--Banner video-->
    <div class="banner-video">
      <h1>Enjoy with your shopping </h1>
      <div class="video-container">
          <video autoplay loop muted>
              <source src="images/Homepage/mainclip2.mp4" type="video/mp4">
          </video>
      </div>
   </div>

  <!--Product bar 01 -->
  <div class="product-bar">
    <p>Flash Sale Product</p>
  </div>

  <!--Product card 01-->
  <ul class="item-cards">
     <!--Looping Flash Sale Product-->
      <?php
         $stmt = $connection->prepare('SELECT * FROM home_product');
         $stmt->execute();
         $result = $stmt->get_result();
         while ($row = $result->fetch_assoc()):
      ?>

   
     <li><div class="card">
         <img src="<?= $row['product_image'] ?>" alt="Denim Jeans" style="width:100%">
         <h3 class = "pname"><?= $row['product_name'] ?></h3>
         <p class="price">Rs <?= $row['product_price'] ?></p>
         Code: <?= $row['product_code'] ?>
         <p class ="desc"><?= $row['product_desc'] ?></p></div></li>
     <?php endwhile; ?>
 </ul>






  <!--Product bar 02-->
  <div class="product-bar">
    <p>New Collections</p>
  </div>

  <!--Product cards 02 -->
  <ul class="item-cards">

  <!--Looping New Collections Product-->
  <?php
      $stmt = $connection->prepare('SELECT * FROM new_collections');
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()):
  ?>

  <li><div class="card">
    <img src="<?= $row['product_image'] ?>" alt="Denim Jeans" style="width:100%">
    <h3 class = "pname"><?= $row['product_name'] ?></h3>
    <p class="price">Rs <?= $row['product_price'] ?></p>
    Code: <?= $row['product_code'] ?>
    <p class ="desc"><?= $row['product_desc'] ?></p></div></li>
    <?php endwhile; ?>
</ul>

  


     <!--Banner -->
 
     <div class="banner-image">
      <div class="banner-text">    
        <h1 style="font-size:50px">Glowy  Shopping Center</h1>
        <div class="banner-font">
        <p>-Happiness is not in money, but in shopping-</p><br></div>
        <button>Shop now</button>
      </div>
    </div>





<!--Product bar 03-->
 <div class="product-bar">
  <p>just for you</p>
</div>

<!--Product cards 03 -->
<ul class="item-cards">

    <!--Looping just for you Product-->
    <?php
      $stmt = $connection->prepare('SELECT * FROM just_for_you');
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()):
  ?>

  <li><div class="card">
    <img src="<?= $row['product_image'] ?>" alt="Denim Jeans" style="width:100%">
    <h3 class = "pname"><?= $row['product_name'] ?></h3>
    <p class="price">Rs <?= $row['product_price'] ?></p>
    Code: <?= $row['product_code'] ?>
    <p class ="desc"><?= $row['product_desc'] ?></p></div></li>
    <?php endwhile; ?>  
</ul>







<!--Product bar 04-->
<div class="product-bar">
  <p>Up Comming</p>
</div>

<!--Product cards 04-->
<ul class="item-cards">
    <!--Looping Up Comming Product-->
    <?php
      $stmt = $connection->prepare('SELECT * FROM up_comming');
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()):
  ?>

  <li><div class="card">
    <img src="<?= $row['product_image'] ?>" alt="Denim Jeans" style="width:100%">
    <h3 class = "pname"><?= $row['product_name'] ?></h3>
    <p class="price">Rs <?= $row['product_price'] ?></p>
    Code: <?= $row['product_code'] ?>
    <p class ="desc"><?= $row['product_desc'] ?></p></div></li>
    <?php endwhile; ?>  
</ul>


     <!--Banner -->
 
     <div class="banner-image">
      <div class="banner-text">    
        <h1 style="font-size:50px">Glowy  Shopping Center</h1>
        <div class="banner-font">
        <p>-Happiness is not in money, but in shopping-</p><br></div>
        
      </div>
    </div>


   <a href="product.php"> <button class="loard-more" style="vertical-align:middle"><span>Loard more Products </span></button></a>

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
