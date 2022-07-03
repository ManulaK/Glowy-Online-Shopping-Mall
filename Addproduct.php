

<?php
session_start();
$username=$_SESSION['susername'];
$password=$_SESSION['spassword'];

$conn=mysqli_connect('localhost','root','','glowydbms') or die("connection failed" .mysqli_connect_error());
$sql = "select *from seller where username= '$username' and password = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
 

if($count == 0)
{  
   
    header("Location:SellerLogin.html");
}  
  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Product</title>
    <link rel="stylesheet" href="Styles/AddProduct/AddProduct.css" />
    <link rel="stylesheet" href="Styles/AddProduct/normalize.css" />
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>

    <style>
      .pagehead {
        margin-left: 35%;
        font-size: 35px;
        color: rgb(0, 0, 0);
      }
      label {
        font-size: 20px;
      }
      .logo {
        margin: 0 0 0.5% 39%;
        width: 25%;
      }
    </style>
  </head>
  <body>
  
    <main>
    
      
      <a href="Homepage.php"
        ><img
          class="logo"
          src="images/Homepage/onlinelogomaker-091721-1248-1692-500.jpg"
          alt="logo of glowy shopping mall"
      /></a>
      <hr />
      <!--Seller Product Page form End-->

      <div class="form">
        <div class="pagehead">
          <i class="fas fa-cart-arrow-down"></i>&nbsp;&nbsp;Add Product
        </div>
        <form
          method="post"
          action="Addproductcode.php"
          enctype="multipart/form-data"
        >
          <label for="Sname"
            ><i class="fas fa-info"></i>&nbsp;&nbsp;Seller Name</label
          >

          <input
            type="text"
            id="Sellername"
            name="Sellername"
            placeholder="Your name.."
          />

          <label for="Shopname"
            ><i class="fas fa-info"></i>&nbsp;&nbsp;Shop name</label
          >
          <input
            type="text"
            id="Shopname"
            name="Shopname"
            placeholder="Your Shop.."
          />

          <label for="title"
            ><i class="fas fa-info"></i>&nbsp;&nbsp;Product Title</label
          >
          <input
            type="text"
            id="title"
            name="title"
            placeholder="Enter Product Title"
          />

          <label for="P_catagory"
            ><i class="fas fa-info"></i>&nbsp;&nbsp;Catagory</label
          >
          <select id="P_catagory" name="P_catagory">
            <option value="Electronics-Devices">
              Electronics&nbsp;Devices
            </option>
            <option value="Tv&HomeAppliances">Tv & Home&nbsp;Appliances</option>
            <option value="Health&Beauty">Health & Beauty</option>
            <option value="Groceries">Groceries</option>
            <option value="Home&LifeStyle">Home & Life&nbsp;Style</option>
            <option value="Fashion">Fashion</option>
          </select>

          <label for="P_des"
            ><i class="fas fa-info"></i>&nbsp;&nbsp;Product Description</label
          >
          <input
            type="textarea"
            id="P-des"
            name="P_des"
            placeholder="Enter Product Decription"
          />

          <!--Price Range-->
          <label for="P_price"
            ><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;Product price</label
          >
          <input
            type="text"
            id="P_price"
            name="P_price"
            placeholder="Enter Product price"
          />

          <div class="slidecontainer">
            <input
              type="range"
              min="1"
              max="100000"
              value="50"
              class="slider"
              id="Range"
            />
            <p style="color: rgb(255, 0, 0)">
              Value Rs: <span id="demo"></span>
            </p>
          </div>

          <label for="P_qty"
            ><i class="fas fa-info"></i>&nbsp;&nbsp;Product Quantity</label
          >
          <input
            type="text"
            id="P_qty"
            name="P_qty"
            placeholder="Enter Product Quantity"
          />

          <label class="container"
            >Online payment<input
              type="checkbox"
              name="check_list[]"
              value="Online payment" /><span class="checkmark"></span
          ></label>
          <label class="container"
            >Cash on delivery<input
              type="checkbox"
              name="check_list[]"
              value="Cash on delivery" /><span class="checkmark"></span
          ></label>
          <label class="container"
            >Available[Tracking]<input
              type="checkbox"
              name="check_list[]"
              value="Available[Tracking]" /><span class="checkmark"></span
          ></label>
          <label class="container"
            >Available[Warranty]<input
              type="checkbox"
              name="check_list[]"
              value="Available[Warranty]" /><span class="checkmark"></span
          ></label>

          <!--File handling -->
          <label for="Addimg"
            ><i class="fas fa-file"></i>&nbsp;&nbsp;Add product
          </label>
          <input type="File" name="file" />

          <input type="submit" value="Add Product" name="submitbtn" />
          <hr />
        </form>
      </div>

      <!--Seller Product Page form End-->

      <!--Script for price range-->
      <script>
        var slider = document.getElementById("Range");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function () {
          output.innerHTML = this.value;
        };
      </script>
    </main>
  </body>
</html>
