<html>
<head>
    
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/signin_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    
        
    </style>
    </head>
<body>
    <?php
   /* 
    ini_set('display_errors',1);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);
     */ 
    include "header.php";
    include_once("connection.php");
    include_once ("EditePasswordModel.php");
    include_once("EditePasswordController.php");
    $model=new EditePasswordModel();
    $controller=new EditePasswordController($model);
 

    if (isset($_GET['action']) && !empty($_GET['action'])) {
     $controller->{$_GET['action']}();
   }
    
    ?>
     <div class="container">
     <h2 >Update Password</h2>
    <form action="EditePasswordView.php?action=UpdatePass" id="form1" method="post">

    <div class="form-group">
    <label for="exampleFormControlInput1"> Old Password</label>
    <input type="password" name="password1" id="psw10" class="form-control" title="Enter your old password here" id="exampleFormControlInput10" required  autofocus>
  </div>

        <div class="form-group">
    <label for="exampleFormControlInput1">NewPassword</label>
    <input type="password" name="password2" id="psw" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="exampleFormControlInput1" required  autofocus>
  </div>
        <div class="form-group">
    <label for="exampleFormControlInput1">confirm password</label>
    <input type="password" name="password3" id="psw2" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="exampleFormControlInput1" required  autofocus>
  </div>

        
        <button type="submit" name="register" id="sup" class="btn btn-primary">Update</button>

        <br><br>

       
    </form>
    
    </div>
    <script>
var myInput = document.getElementById("psw");
var myInput2 = document.getElementById("psw2");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

function validatePassword(){
  if(myInput.value != myInput2.value) {
    myInput2.setCustomValidity("Passwords Don't Match");
  } else {
    myInput2.setCustomValidity('');
  }
}

myInput.onchange = validatePassword();
myInput2.onkeyup = validatePassword();
// When the user clicks on the password field, show the message box

myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}


// When the userstype something inside the password field
myInput.onkeyup = function() {
  // da validate l lower case
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validat cap letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate num
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
    function validatePassword(){
  if(myInput.value != myInput2.value) {
    myInput2.setCustomValidity("Passwords Don't Match");
  } else {
    myInput2.setCustomValidity('');
  }
}
 
}
    </script>
    
    </body>

</html>