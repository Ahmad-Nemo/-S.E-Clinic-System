<html>
<head>
    <head>
        <title>Dr Hisham medical center</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">
    
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
    
        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
           <style>
    
        {
            align-content: center;
        }
    
    </style>
    <style>
        
    
          
           .logo
       {
        width: 100px;
        height: 100px; 
       } 
          </style>
    
    
        <!-- Theme Style -->
        <link rel="stylesheet" href="css/style.css">
      </head>

<?php include ("Admin.php");

include_once ("AddDoctorModel.php");
include_once("AddDoctorController.php");
$model=new AddDoctorModel();
$controller=new AddDoctorController($model);


if (isset($_GET['action']) && !empty($_GET['action'])) {
 $controller->{$_GET['action']}();
}


?>




    <body>
        
 
      <?php
   
    include_once("connection.php");
    
   
    
    ?>

    <div class="container">
     <h2 >Add a doctor</h2>
    <form action="AddDoctorView.php?action=insertuser" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">First name </label>
    <input type="text" name="fname" class="form-control" id="exampleFormControlInput1" pattern="[A-Za-z]{2,}"placeholder="Enter Your First Name" title="can`t contain numbers" required> 
  </div>
        <div class="form-group">
    <label for="exampleFormControlInput1">Last name</label>
    <input type="text" name="lname" class="form-control" id="exampleFormControlInput1" pattern="[A-Za-z]{2,}"placeholder="Enter Your First Name" title="can`t contain numbers" required>
  </div>
        <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" placeholder="name@example.com" required>
  </div>
        <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" name="password" id="psw" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
  </div>
        <div class="form-group">
    <label for="exampleFormControlInput1">confirm password</label>
    <input type="password" name="password" id="psw2" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
  </div>
        <div class="form-group">
    <label for="exampleFormControlInput1">Phone number</label>
    <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your phone" title="can`t contain numbers" required>
  </div>
       
  <div class="form-group">
    <label for="exampleFormControlSelect1">Date of Birth</label>
    <select class="form-control" name="gender" id="exampleFormControlSelect1" value="2020-05-19"min="1950-01-01" max=<?php echo date('Y-m-d');?> required>
      <option>male</option>
      <option>female</option>
      
    </select>
      
  </div>
  <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label"> Gender</label>
                    <div class="col-sm-9">
                        <input type="date" name="date" id="birthDate" class="form-control" required>
                    </div>
  </div>
        <button type="submit" name="submit" id="sup" class="btn btn-primary">Sign UP</button>
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
}
    </script>
   

    
</body>



</html>