<?php
    session_start();
    $db_name = "glowydbms";
    $connection = mysqli_connect("localhost","root","",$db_name);
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    
    $conn=mysqli_connect('localhost','root','','glowydbms') or die("connection failed" .mysqli_connect_error());
    $sql = "select *from glowy where User_Name = '$username' and Password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
     
    
    if($count == 0)
    {  
        
        header("Location:login.php");
    }  
    if(isset($_POST["add"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"],"product_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'product_quantity' => $_POST["quantity"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>alert("Product is added to  the cart")</script>';
                echo '<script>window.location="product.php"</script>';
            }else{
                echo '<script>alert("Product is already in  the cart")</script>';
                echo '<script>window.location="product.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/select_page/select_page.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Shopping Cart</title>  

</head>

<body>



    <div class="b123">
    <a href="Homepage.php"><button>
        Home
    </button></a>
    <a href="cart.php"><button>
       cart
    </button></a></div>
    <div class="container" style="width: 65%">

    <div class="product-bar">
    <img class="logo" src="images/Homepage/onlinelogomaker-091721-1248-1692-2000-transparent.png" alt="logo of glowy shopping mall"/>
       
        <p>-All Glowy Items-</p>
    <marquee width="70%" behavior="scroll" direction="right" scrollamount="10"><p class="marque">Find&nbsp;&nbsp;your&nbsp;&nbsp;Glowys&nbsp;|&nbsp;
        Find&nbsp;&nbsp;your&nbsp;&nbsp;Glowys&nbsp;|&nbsp;Find&nbsp;&nbsp;your&nbsp;&nbsp;
        Glowys&nbsp;&nbsp;Find&nbsp;&nbsp;your&nbsp;&nbsp;Glowys&nbsp;|&nbsp;Find&nbsp;&nbsp;your&nbsp;&nbsp;Glowys</p></marquee>
  </div>
 

        <?php
            $query = "select * from allitems";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>

<div  class="dress" >
                <div class="card" >    

                    <form method="post" action="product.php?action=add&id=<?php echo $row["product_id"];?>">
                    <div class="product">
                    <img src="<?php echo $row["product_image"];?>" width="100%"  class="img-responsive">
                    <h5 class="text-info"><?php echo $row["product_name"];?></h5>
                    <h5 class="price">Rs:<?php echo $row["product_price"];?>/=</h5>
                    <p class="text-danger"><?php echo $row["product_desc"];?></p><br>
                    <input type="number" name="quantity" class="quantity" value="1">
                    <input type="hidden" name="hidden_name" value="<?php echo $row["product_name"];?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $row["product_price"];?>">
                    <button name="add" value="Add to cart">Add To Cart</button>
                    </div>
                
                    </div>       
</form>
</div>

    


        <?php
                }
            }
        ?>

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
