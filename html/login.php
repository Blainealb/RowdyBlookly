<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="/assets/css/login_style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
  <h1>RowdyBooks</h1>
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">SIGN UP</a></li>
        <li class="tab"><a href="#login">LOG IN</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">
          <h1>Create Account</h1>
          

          <!-- start of form -->
          <form action="Registration.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" id ="fname" name="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" id ="lname" name="lname" required autocomplete="off"/>
            </div>
          </div>
              
        <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" id ="username" name="username" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              UTSA Email Address<span class="req">*</span>
            </label>
            <input type="email" id ="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" id ="pwd" name="pwd" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block">Get Started</button>
          
          </form>
          <!-- end of form -->

        </div>
        
        <div id="login">
          <h1>Welcome Back!</h1>
          
          <form action="home.php" method="post">
          
            <div class="field-wrap">
            <label>
              UTSA Email Address<span class="req">*</span>
            </label>
            <input type="email" id ="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id ="pwd" name="pwd" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block">Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../js/login_script.js"></script>

</body>
</html>


