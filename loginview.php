<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/signin_style.css">
    
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
    <input type="password" class="form-control" placeholder="Enter Password" value="<?php echo $_COOKIE['Password'] ?>" id="pass" name="upassword" required><br><br>
        
    <button class="btn mybtn" name="Submit"  type="submit">Login</button><br>
    <label>
        
      <input type="checkbox" checked="checked" class="form-check-label" name="remember"> Remember me
    </label>
      
  </div>

</form>
    
    
    <script>
      document.getElementById("uname").focus();
        
    </script>
    

</body>

    
    
    
    </html>