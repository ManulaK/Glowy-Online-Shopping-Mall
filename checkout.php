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

<?php
    session_start();
    $db_name = "glowydbms";
    $connection = mysqli_connect("localhost","root","",$db_name);
    $total=0;

?>



<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Styles/checkout/cstyle.css?>=<?php echo time();?>"></link>
    <link rel="stylesheet" href="Styles/checkout/allitems.css?>=<?php echo time();?>"></link>
	  <title>Checkoutpage</title>
	 <link rel="stylesheet" href="css/normalize.css"></link>
    <script src="JS/checkout/myScript.js"></script>
  
</head>

<body>
  

<header>
      <section class="headerp1">
        <div class="logo">
          <img
            class="logoimg"
            src="images/checkout/online-shopping-mall-logo.png"
            alt="logo of glowy online shopping mall"
          />
        </div>

        <div class="navlinks">
          <ul class="navigation_links">
          <li><a href="Homepage.php"><button>Homepage</button></a></li>
              <li><a href="login.php"><button>Customer&nbsp;login</button></a></li>
              <li><a href="SellerLogin.html"><button>Seller&nbsp;login</button></a></li>
              <li><a href="ContactUs.html"><button>Contact&nbsp;us</button></a></li>
          </ul>
        </div>
        <p class="username"><?php  echo" Hello ". $_SESSION['username'];
?></p>  
        <div class="loginbutton"> <a href="logout.php"><button>Logout</button></a></div>
      </section>
      <section class="headerp2">
        <img src="images/checkout/online-shopping-mall-checkout-button.png" alt="option icon">
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
<div class="lachitha">
    

</br>
    
        <div class="col-75">
          <div class="container">
            
                <div class="row">


                <div class="row1">
                <div class="col-50">
				
                    <h3>Payment</h3>
                    <label for="fname">Accepted Cards</label>
                    <div class="icon-container">
                        <input type="radio" id="html" name="fav_language" value="HTML" required>
                      <i class="fa fa-cc-visa" style="color:navy;"></i>
                      <input type="radio" id="html" name="fav_language" value="HTML" required>
                      <i class="fa fa-cc-amex" style="color:blue;"></i>
                      <input type="radio" id="html" name="fav_language" value="HTML" required>
                      <i class="fa fa-cc-mastercard" style="color:red;"></i>
                      <input type="radio" id="html" name="fav_language" value="HTML" required>
                      <i class="fa fa-cc-discover" style="color:orange;"></i>
                      
                      </div>
                      
                      <label for="email"><i class="	fa fa-credit-card"></i> Card Number</label>
                      <input type="number" name="cardnumber" pattern="[0-9]" required>
                      <label for="email"><i class="	fa fa-user"></i> Name</label>
                      <input type="text" name="cardname"  required>
   
                      <div class="" id="expiration-date">
                        <label >Expiration Date</label>
                        <select class="exedate">
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>

                            
                        </select>

                        <select class="exedate">
                          <option value="16"> 2016</option>
                          <option value="17"> 2017</option>
                          <option value="18"> 2018</option>
                          <option value="19"> 2019</option>
                          <option value="20"> 2020</option>
                          <option value="21"> 2021</option>
                      </select>
                        
                    </div>

                    <div class="form-group CVV">
                      <label for="cvv">CVV</label>
                      <input type="number" class="form-control" id="cvv">
                  </div>
                      </div>
                   
                      
                          
                    </div>
                   
                    
                    

                    <div class="row1">
                    <div class="col-50">
				
          <form action="order.php" method="POST" >
                  <h3>Billing Address</h3>
                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>

                  <input type="text" name="fullname"  required>

                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" required>

                  <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                  <input type="text" id="adr" name="address" required>

                  <label for="city"><i class="fa fa-institution"></i> City</label>
                  <input type="text" id="city" name="city" required>
                  <label for="state">State</label>

                  <input type="text" id="state" name="state" required>
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" required>
                  <br><br>
                  
                  
                 


                  <label>
                    <input type="checkbox"  > Shipping address same as billing
                  </label>
                  

                    


      
                
                </div>
                </div>
                
            </div>


                <br>
                <div class="container">
                <div class="row2">

                <div class="col-50">
                   
                      <br>
                      <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
            ?>
                      
                      <?php
                   $GLOBALS['total'] = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
            ?>
<!--total row in table-->
         
                    
                        
                        
           
                        <?php
             }
     ?> 
                      <h2> Subtotal<span class="price">Rs.<?php echo number_format($total,2);?></span></h2>
                      <h4> Shipping<span class="price">Rs.0.00</span></h4>
                      <h4> Charges<span class="price">Rs.0.00</span></h4>
                      
                      <hr>
					  <br>
                      <h2>Total <span class="price" style="color:black"><b>Rs.<?php echo number_format($total,2);?></b></span></h2>

                      <label>
                        <input type="checkbox"  id="checkbox" onclick="enableButton()" > Comfirm all details are correct
                      </label>

                      <br>
                      <div class="container123">
                        <a href="ordersuccessfull.html"><button class="btn" id="submitBtn" type="Submit" name="gl" disabled>Comfirm and Pay</button></a>
                      </div>

                     

                      </form>

                    </div>
                  </div>
                </div>
            
               


     </div>
     </div>
     </div>
        
          
      

     
 

            </div>
</body>    




    