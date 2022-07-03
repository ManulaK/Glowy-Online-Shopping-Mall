<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "glowydbms";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno())
     {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link rel="stylesheet" href="Styles/login/login.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="Styles/login/normalize.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>

    <form
      method="POST"
      action="authentication.php"
      onsubmit="return validation()"
    >

      <div class="imgcontainer">
        <img
          src="images/login/cart.jpg"
          alt="Avatar"
          class="Avatar"
          style="position: absolute; top: 10%; left: 33%"
        />
      </div>

      <div class="container" class="label1">
        <div>
          <label for="username" class="label1"><b>Username</b></label>
        </div>
        <input
          type="text"
          class="user"
          placeholder="Enter username"
          name="user"
          id="user"
          required
        />

        <br /><br /><br />

        <label for="password" class="label2"><b>Password</b></label>
        <input
          type="password"
          class="pass"
          placeholder="Enter password"
          name="pass"
          id="pass"
          required
        />

      </div>
      <button class="loginbutton" type="submit" id="btn">Login</button>
      <br/><br/>

    </form>
    <script>
      function validation() {
        var id = document.f1.user.value;
        var ps = document.f1.pass.value;
        if (id.length == "" && ps.length == "") {
          alert("User Name and Password fields are empty");
          return false;
        } else {
          if (id.length == "") {
            alert("User Name is empty");
            return false;
          }
          if (ps.length == "") {
            alert("Password field is empty");
            return false;
          }
        }
      }
    </script>
    <p class="p2">
          By creating an account you agree to our
          <a href="P&P.php">Terms & Privacy</a>.
        </p>

        <p class="p3">Don't have an account? <a href="SignUp.html">Register</a></p>
  </body>
</html>
