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
    
    ini_set('display_errors',1);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);
    
    include "header.php";
    include_once("connection.php");
   
    
    ?>
     <div class="container">
     <h2 >Sign Up</h2>
    <form action="LoginController.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">First name </label>
    <input type="text" name="fname" class="form-control" id="exampleFormControlInput1" required>
  </div>
        <div class="form-group">
    <label for="exampleFormControlInput1">Last name</label>
    <input type="text" name="lname" class="form-control" id="exampleFormControlInput1" required>
  </div>
        <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
  </div>
        <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" name="password" id="psw" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="exampleFormControlInput1" required >
  </div>
        <div class="form-group">
    <label for="exampleFormControlInput1">confirm password</label>
    <input type="password" name="password" id="psw2" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="exampleFormControlInput1" required >
  </div>
        
        <div class="form-group">
    <label for="exampleFormControlInput1">Phone number</label>
    <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" required >
  </div>
         <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" name="date" id="birthDate" class="form-control" value="2020-05-19"min="1950-01-01" max="2020-05-19" required>
                    </div>
                </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" name="gender" id="exampleFormControlSelect1">
      <option>male</option>
      <option>female</option>
      
    </select>
      
  </div>
        <button type="submit" name="register" id="sup" class="btn btn-primary">Sign UP</button>
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

myInput.onchange = validatePassword;
myInput2.onkeyup = validatePassword;
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