<html>
<html lang="en">
<head>

    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/signin_style.css">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src='https://www.google.com/recaptcha/api.js'></script> 


 <style>
 
 
 #g-recaptcha-response {
    display: block !important;
    position: absolute;
    margin: -78px 0 0 0 !important;
    width: 302px !important;
    height: 76px !important;
    z-index: -999999;
    opacity: 0;
}
 
 </style>




    <?php
    //session_start();
    
    if(!isset($_SESSION['username']))
    {
      include_once ("login.php");
         }   
    if(isset($_POST["remember"]))
        {  
         include_once("cookies.php");
        }
    if(!isset($_COOKIE['Username']))
    {
        $_COOKIE['Username']="";
        
    }
   if(!isset($_COOKIE['Password']))
    {
        $_COOKIE['Password']="";
        
    }
    ?>
    </head>
 <script src="js/wow.min.js"></script>
    <script>
              new WOW().init();
        
    </script>
    
<body>
<?php include_once ("header.php");
    $Error="";
    if(isset($_SESSION['error']))
       {
           $Error=$_SESSION['error'];
       }
       
       
       
    
    ?>

<form action="LoginController.php" method="post">
  <div class="imgcontainer wow fadeIn">
    
      <div class="line"></div>
  </div>
  <div class="container">
      <h2 class="title wow flipInX" data-wow-delay="0.5s">Sign In</h2>
      <?php echo "<h4 style='color: red'>".$Error."</h4>"; ?>
    <label for="uname"><b>Email</b></label><br>
    <input type="text" class="form-control" placeholder="Enter Username" value="<?php echo $_COOKIE['Username'] ?>" id="uname" name="username" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" class="form-control" placeholder="Enter Password" value="<?php echo $_COOKIE['Password'] ?>" id="pass" name="upassword" required>
    <br>
    <br>
    <div class="g-recaptcha" data-sitekey="6LfeHx4UAAAAAAKUx5rO5nfKMtc9-syDTdFLftnm"  required  ></div>

     <input type="checkbox" checked="checked" class="form-check-label" name="remember"> Remember me
     <br>


    <button class="btn mybtn" name="Submit"  type="submit">Login</button><br>
    <label>
        
  
    </label>
      
  </div>

</form>
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
    

    
    <script>
      document.getElementById("uname").focus();
      window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};
    </script>
    

</body>

    
    
    
  