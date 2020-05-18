<html>
<?php include_once ("header.php");
     include_once ("resModel.php");
     include_once("rescontroler.php");
     $model=new resModel();
     $controller=new rescontroler($model);
  

     if (isset($_GET['action']) && !empty($_GET['action'])) {
      $controller->{$_GET['action']}();
    }

    ?>
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#appointment_date" ).datepicker({
	   				minDate: 0
	   			});
	  		});
	  	</script>


<style>
    

      
       .logo
   {
    width: 100px;
    height: 100px; 
   } 


 {
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
}
      </style>


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <script>
    var name=document.getElementById("appointment_name"); 

    function validateForm() {
  var x = document.forms["myForm"]["nam"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
}
}
</script>

</head>






<body>
    <section class="container">
    
    <h1>Appointment</h1>

<form name="myForm" action="resview.php?action=insertresresrvation" onsubmit="return validateForm()" method="post">
            <br>
              <label for="company">Choose a Company:</label>
              <?php 
    // $s  = new resModel;
    //$resultSet= $s-> readCompany();
    $controller->readCompany();
?>
<select id="comps" name='comps' required>
<?php
 while($row=$model->getCompanyname()->fetch_assoc())
 {
    $Name =$row['Name'];
    echo "<option value='$Name'>$Name</option>";
 }

?>
</select>
                <br>
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name" name ="nam" pattern="[A-Za-z]{2,}"placeholder="Enter username.." required>
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email" name ="name2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$"placeholder="Enter Email .." required>
              </div>
              <h> We are open from 13:00 to 22:00<h> 
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date" name="appointment_date"  placeholder="Select the Day" required> 
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time </label>
                    <input type="time" class="form-control" id="appointment_time" name="appointment_time"  min="13:00" max="22:00" onfocus="this.value='Open from 12:00 to 22:00'" required>
                  </div>
                </div>
              </div>
              <br>
                <label for="exampleFormControlInput1">Phone No.</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="exampleFormControlInput1" pattern="[0-9]{10,}" placeholder="Enter phone number" required>
                <br>
                  
              <label for="cars">Choose a doctor:</label>
              <?php 
 $controller->readdoctor();
//var_dump($resultSet);
?>
<select id="cars" name='Doctors' required>
<?php
 while($row=$model->getdoctor()->fetch_assoc())
 {
    $Name =$row['FirstName'];
    echo "<option value='$Name'>$Name</option>";
 }

?>
</select>
                  
    
                <br>

              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="mess" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="sub" value="Reserve" class="btn btn-primary">
              </div>
            </form>



            </body>
 
                  

</section>














</html>