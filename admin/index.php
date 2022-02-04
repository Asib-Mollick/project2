<?php 
session_start();
require "db.php";

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login | Asib Mollick</title>
    <link rel="stylesheet" href="dist/css/index.css">
  </head>
  <body>

    <div class="wrapper">
    
    
      <div class="title">Login Form</div>
      <form action="action.php" method="POST" enctype="multipart/form-data">
        <div class="field">
          <input type="text" name="email" required>
          <label>Email Address</label>
         
        </div>
        <div class="field">
          <input type="password" name="password" required>
          <label>Password</label>
      
  
        
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
        </div>
        <?php
          if (isset($_SESSION['not'])) {
      ?>
          <div class="alert alert-success">
            <h4 style="text-align: center; color:red; " > <?php echo $_SESSION['not']; ?>  </h4>
          </div>
      <?php   
          }
      ?>
       <?php
          if (isset($_SESSION['deactive'])) {
      ?>
          <div class="alert alert-success">
            <h4 style="text-align: center; color:red; " > <?php echo $_SESSION['deactive']; ?>  </h4>
          </div>
      <?php   
          }
      ?>
        <div class="field">
          <input type="submit" name="login" value="Login">
        </div>
        <div class="signup-link"> Don't have an account?<a href="registration.php"> Signup now</a></div>
      </form>
    </div>

  </body>
</html>

<?php
session_unset();
?>