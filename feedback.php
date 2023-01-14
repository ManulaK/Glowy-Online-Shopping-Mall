<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback</title>
    
    <link rel="stylesheet" href="Styles/feedback/feedback01.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="Styles/feedback/normalize.css?v=<?php echo time(); ?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

  <body>
    <!--header starts here-->
    <header>
      <section class="headerp1">
        <div class="logo">
          <img
            class="logoimg"
            src="images/All items/onlinelogomaker-091721-1248-1692-2000-transparent.png"
            alt="logo of glowy online shopping mall"
          />
        </div>

        <div class="navlinks">
        <ul class="navigation_links">
              <li><a href="Homepage.php"><button>Home</button></a></li>
              <li><a href="P&P.php"><button>Privacy&nbsp;Policy</button></a></li>
              <li><a href="SellerLogin.html"><button>Seller&nbsp;login</button></a></li>
              <li><a href="ContactUs.html"><button>Contact&nbsp;us</button></a></li>
            
        </ul>
        </div>
        <p class="username"><?php session_start(); echo" Hello ". $_SESSION['username'];
?></p> 
        <div class="loginbutton"> <a href="cart.php"><button>My Cart</button></a></div>
      </section>
      <section class="headerp2">
        <img src="images/All items/outline_list_black_24dp.png" alt="option icon">
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
  <body>

    <div class="container">
        <div class = "contact-box">
        <form method="POST" action = "insert.php" name = "feedback">

            <center>
          <h1><b>Feedback Page</b></h1>
            </center>
    
            <img src = "images/feedback/pixa08.jpg" class = "image">

          <label for="fname"><b>Name</b></label>
          <input type="text" id="fname" name="name" placeholder="Your Name.." required>
      
          <label for="email"><b>Email</b></label>
          <input type="text" id="lname" name="email" placeholder="Your Email.." required>
      
          <label for="District"><b>District</b></label>
          <select id="district" name="district" required>
            <option value="Colombo">Colombo</option>
            <option value="Kaluthara">Kaluthara</option>
            <option value="Gampaha">Gampaha</option>
            <option value="Ampara">Ampara</option>
            <option value="Anurdhapura">Anuradhapura</option>
            <option value="Badulla">Badulla</option>
            <option value="Batticola">Batticola</option>
            <option value="Galle">Galle</option>
            <option value="Hambanthota">Hambanthota</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Kandy">Kandy</option>
            <option value="Kegalle">Kegalle</option>
            <option value="Kilinochchi">Kilinochchi</option>
            <option value="Mannar">Mannar</option>
            <option value="Matale">Matale</option>
            <option value="Matara">Matara</option>
            <option value="Monaragala">Monaragala</option>
            <option value="Mullaitivu">Mullaitivu</option>
            <option value="Nuwara Eliya">Nuwara Eliya</option>
            <option value="Polonnaruwa">Polonnaruwa/option>
            <option value="Puttalam">Puttalam</option>
            <option value="Rathnapura">Rathnapura</option>
            <option value="Trincomalee">Trincomalee</option>
            <option value="Vauniya">Vauniya</option>
          </select><br>

          <label for = "star"><b>How would you rate the speed of our website ?</b></label><br><br>
          <input type="radio" id="good" name="quantity" value="good">
          <label for="good">Good</label>
          <input type="radio" id="very good" name="quantity" value="very good">
          <label for="very good">Very good</label>
          <input type="radio" id="bad" name="quantity" value="bad">
          <label for="bad">Bad</label><br><br>

      
          <label for="subject"><b>What do you think of our web site ?</b></label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
          
        <input type="submit" value="Submit" name = "submit" onclick = "push()">
     
        </form>
        </div>
      </div>

    <p id="submit">

            <script>
                function push() 
                    {
                        var txt;
                        if (confirm("Successfully submitted!  Thank you for coming our website")) 
                        {
                               txt = "Saved feedback!";
                        } 
                        else 
                        {
                               txt = "Not saved feedback!";
                        }
                        document.getElementById("submit").innerHTML = txt;
                    }
            </script>
    </p>
    <div class="footer">
      <div class="contain">
      <div class="col">
        <h1>Glowy Online Shopping</h1>
        <ul>
          <li>About</li>
          <li>Mission</li>
          <li>Services</li>
          <li>Social</li>
          <li>Get in touch</li>
        </ul>
      </div>
      <div class="col">
        <h1>Products</h1>
        <ul>
          <li>About</li>
          <li>Mission</li>
          <li>Services</li>
          <li>Social</li>
          <li>Get in touch</li>
        </ul>
      </div>
      <div class="col">
        <h1>Accounts</h1>
        <ul>
          <li>About</li>
          <li>Mission</li>
          <li>Services</li>
          <li>Social</li>
          <li>Get in touch</li>
        </ul>
      </div>
      <div class="col">
        <h1>Resources</h1>
        <ul>
          <li>Webmail</li>
          <li>Redeem code</li>
          <li>WHOIS lookup</li>
          <li>Site map</li>
          <li>Web templates</li>
          <li>Email templates</li>
        </ul>
      </div>
      <div class="col">
        <h1>Support</h1>
        <ul>
          <li>Contact us</li>
          <li>Web chat</li>
          <li>Open ticket</li>
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
    <div class="clearfix"></div>
      <div class ="payment-icons">
              <h1>Payment</h1><br>
              <i class="fa fa-cc-visa" style="font-size:40px;color:aliceblue"></i>
              <i class="fa fa-cc-amex" style="font-size:40px;color:aliceblue"></i>
              <i class="fa fa-cc-discover" style="font-size:40px;color:aliceblue"></i>
              <i class="fa fa-cc-mastercard" style="font-size:40px;color:aliceblue"></i>
              <i class="fa fa-cc-paypal" style="font-size:40px;color:aliceblue"></i>
              <i class="fa fa-credit-card" style="font-size:40px;color:aliceblue"></i>
              <i class="fa fa-paypal" style="font-size:40px;color:aliceblue"></i>             
  
      </div>
  
    </div>
    </div>
  <!--Footer ends here-->
  </body>
</html>

