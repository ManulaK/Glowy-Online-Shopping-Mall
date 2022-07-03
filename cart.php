<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
<!--Linking css-->
    <link rel="stylesheet" href="Styles/cart/style.css?>=<?php echo time();?>"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Styles/cart/allitems.css?>=<?php echo time();?>"></link>
</head>
<body>
  <header>
      <section class="headerp1">
        <div class="logo">
          <img
            class="logoimg"
            src="images/cart/online-shopping-mall-logo.png"
            alt="logo of glowy online shopping mall"
          />
        </div>

        <div class="navlinks">
        <ul class="navigation_links">
              <li><a href="feedback.php"><button>feedback</button></a></li>
              <li><a href="login.php"><button>Customer&nbsp;login</button></a></li>
              <li><a href="SellerLogin.html"><button>Seller&nbsp;login</button></a></li>
              <li><a href="ContactUs.html"><button>Contact&nbsp;us</button></a></li>
        </ul>
        </div>
        <p class="username"><?php session_start(); echo" Hello ". $_SESSION['username'];
?></p>    
        <div class="loginbutton"> <a href="Homepage.php"><button>Home</button></a></div>
      </section>
      <section class="headerp2">
        <img src="images/cart/online-shopping-mall-cart-button.png" alt="option icon">
        <div class="categorybtns">
            
            <ul class="catagory">
               
                <li><a href="product.php"><button>ELECTRONICS&nbsp;DEVICES</button></a></li>
                <li><a href="product.php"><button>TV&HOME&nbsp;APPLIANCES</button></a></li>
                <li><a href="product.php"><button>HEALTH&BEAUTY</button></a></li>
                <li><a href="product.php"><button>GROCERIES</button></a></li>
                <li><a href="product.php"><button>HOME&LIFE&nbsp;STYLE</button></a></li>
                <li><a href="product.php"><button>FASHON</button></a></li>
            </ul>
        </div>
      </section>
    </header>

<!--Connect database-->
    <?php
    
    $db_name = "glowydbms";
    $connection = mysqli_connect("localhost","root","",$db_name);

?>
<!--delete button php-->
    <?php
                if(isset($_GET["action"])){
                    if($_GET["action"] == "delete"){
                        
                        foreach($_SESSION["shopping_cart"] as $keys => $value){
                            if($value["product_id"] == $_GET["id"]){
                                unset($_SESSION["shopping_cart"][$keys]);
                            
                                echo '<script>alert("item removed")</script>';
                                  echo '<script>window.location="cart.php"</script>';
                            }
                            
                        }
                    }
                    
                }
                
    ?>


<h3 class="title1">Shopping Cart Details</h3>
<hr class="new1">     
<img class="img" src=images/cart/online-shopping-mall-cart-cart.png>

<!--cart Table-->
<div class="table">
 
    <table >
         <tr>
                <th >Product ID</th>
                <th >Product Description</th>
                <th >Quantity</th>
                <th >Price Details</th>
                <th >Total Price(Rs.)</th>
                <th >Remove Item</th>
         </tr>

<!--add to cart php-->
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
            ?>
                      
        <tr>
            <td><?php echo $value["product_id"];?></td>
                    <td><?php echo $value["product_name"];?></td>
                    <td><?php echo $value["product_quantity"];?></td>
                    <td><?php echo $value["product_price"];?></td>
                    <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                    <td ><button class="btndel"><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><i class="fa fa-trash"></i></a></button></td>
        </tr>
<!--total calculation php-->
            <?php
                   $GLOBALS['total'] = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
            ?>
<!--total row in table-->
            <tr>
                    
                        <td class="total" colspan="4" align="right">Total</td>
                        <td  colspan="2" align="left"><?php echo number_format($total,2);?></td>
            </tr>
               

    </table>
    <div>   
<!--checkout button php-->
 <?php
$t = 0;

if ($t <  $total) {
    echo '<form action="checkout.php"><button style=" background-color: #04AA6D; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    position: absolute;
    right: 0%;
    top: 100%;">CHECKOUT</button></form>';
} 
?>
      <a href="product.php"><button style="background-color: #04AA6D; 
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    position: absolute;"> SHOPPING</button> </a>     
           </div> 
           
      <?php
             }
     ?>  



     
</body>



</html>