<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
		<title>Company Edit/Delete/Add</title>

				<!-- END header -->
				<link rel="stylesheet" href="css/style.css">
</head>
<?php

ini_set('display_errors',0);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);

?>

<?php
include ("connection.php");
include_once ("EditDoctorModel.php");
include_once("EditDoctorController.php");
$model=new EditDoctorModel();
$controller=new EditDoctorController($model);


if (isset($_GET['action']) && !empty($_GET['action'])) {
 $controller->{$_GET['action']}();
}




			$Sql1="SELECT * FROM users WHERE ID='".$_POST['ID']."' AND(TypeID='1' OR TypeID= '3')" ;
			$result1=mysqli_query($conn,$Sql1);

				if($result1)
				{
					$row=mysqli_fetch_array($result1);
					$oldID=$row['id'];
					$oldstatus=$row['status'];
					$oldFirstName=$row['FirstName'];
					$oldLastName=$row['LastName'];
					$oldEmail=$row['Email'];
						$oldPassword=$row['Password'];
							$oldPhoneno=$row['Phoneno'];
								$oldDOB=$row['DOB'];
									$oldgender=$row['gender'];
									$oldTypeID=$row['TypeID'];

				}

			if(isset($_POST['Save1']))
			{
                

	}
// }

?>


<script>
$(document).ready(function (){
	$("#Edit").on('click',function(){
		$("#form1").toggle();
	});
});

</script>



<style>
#label{
	color:grey;
	font-family:sans serif;
	font-size:120%;
}

.logo
{
width: 100px;
height: 100px;
}
</style>

<body>

<?php include ("Admin.php");?>
<br>

	 <?php
	 include ("connection.php");
	 include ("DBHelper.php");

	 $sql="SELECT * FROM users WHERE (TypeID='1' OR TypeID= '3')";
	 	$result = mysqli_query($conn,$sql);
	 	if (mysqli_num_rows($result) > 0) {
	 	echo "<table class='table table-striped table-bordered' >";
	 	echo "<th>Doctor ID</th>"."<th>Status</th>"."<th>First Name</th>"."<th>Last Name</th>"."<th>Email</th>"."<th>Password</th>"."<th>Phone Number</th>"."<th>DOB</th>"."<th>Gender</th>";

	 	   while($row = mysqli_fetch_array($result)) {
	 	   echo "<tr><td>".$row['ID']."</td>".
	 	   "<td>".$row['status']."</td>".
	 		 "<td>".$row['FirstName']."</td>".
			  "<td>".$row['LastName']."</td>".
				 "<td>".$row['Email']."</td>".
				  "<td>".$row['Password']."</td>".
					 "<td>".$row['Phoneno']."</td>".
					  "<td>".$row['DOB']."</td>".
						 "<td>".$row['gender']."</td></tr>";

	 	   }
	 	   echo "</table>";
	 	}
	 	else {
	     echo "<h4>No Doctor Info yet</h4>";
	 	}
	 ?>


<button class="btn btn-default" id = "Edit" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" >Edit</button>


<form id="form1" action = "EditDoctor.php?action=updateuser" style = "display:none; margin:0.5%;" method="post">

	<hr>
	<h3>Please Edit A Doctor</h3>

<b id="label">Doctor's ID</b>
<br>
<div class="form-group">
<input type="text" id="ID" Name="ID" style="width:70%;" class="form-control" required>
<br>
</div>
<b id="label">Status</b>
<br>
<form action="" id="status" Name="Status">
  <input type="radio" name="gender" value="Approved"> Approved<br>
  <input type="radio" name="gender" value="pending"> Pending<br>
</form>
<br>
</div>
<b id="label">First Name</b>
<br>
<div class="form-group">
<input  type="text" id="FirstName" Name="FirstName" style="width:70%;" class="form-control" required>
<br>
</div>
<b id="label">Last Name	</b>
<br>
<div class="form-group">
<input  type="text" id="LastName" Name="LastName" style="width:70%;" class="form-control" required>
<br>
</div>
<b id="label">Email</b>
<br>
<div class="form-group">
<input  type="text" id="Email" Name="Email" style="width:70%;" class="form-control" required>
<br>
</div><b id="label">Password</b>
<br>
<div class="form-group">
<input  type="text" id="Password" Name="Password" style="width:70%;" class="form-control" required>
<br>

</div><b id="label">Phone Number</b>
<br>
<div class="form-group">
<input  type="text" id="Phoneno" Name="Phoneno" style="width:70%;" class="form-control" required>
<br>
</div>
<b id="label">DOB</b>
<br>
<div class="form-group">
<input  type="date" id="DOB" Name="DOB" style="width:70%;" class="form-control"  value="2020-05-19"min="1950-01-01" max="2020-05-19" required>
<br>
</div>
<b id="label">Gender</b>
<br>
<form action="" id="gender" Name="gender">
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
</form>
<br>
</div>

<input class="btn btn-default" type="Submit" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" Value="Save" id="Save1" Name="Save1">
<input class="btn btn-default" type="reset" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" Value="Reset" id="reset" Name="Reset">
    
</form>


<footer class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row mb-5 element-animate">
			<div class="col-md-3 mb-5">
				<h3>Services</h3>
				<ul class="footer-link list-unstyled">
					<li><a href="doctors.html">Find a doctor</a></li>

				</ul>
			</div>
			<div class="col-md-3 mb-5">
				<h3>Latest News</h3>
				<ul class="footer-link list-unstyled">
					<li><a href="news.html">News &amp; Press Releases</a></li>

				</ul>
			</div>
			<div class="col-md-3 mb-5">
				<h3>About</h3>
				<ul class="footer-link list-unstyled">
					<li><a href="about.php">About the Medical care center</a></li>
				</ul>
			</div>
			<div class="col-md-3 mb-5">
				<h3>Location &amp; Contact</h3>
				<p class="mb-5">El matria square bit el ezz towers 2 tower A 3rd floor app no 301 </p>

				<h4 class="text-uppercase mb-3 h6 text-white">Email</h4>
				<p class="mb-5"><a href="mailto:info@yourdomain.com">mortada_hisham23@yahoo.com</a></p>

				<h4 class="text-uppercase mb-3 h6 text-white">Phone</h4>
				<p>01023078804</p>
				<p>01127222712</p>

			</div>
		</div>

		<div class="row pt-md-3 element-animate">
			<div class="col-md-12">
				<hr class="border-t">
			</div>
			<div class="col-md-6 col-sm-12 copyright">
				<p>&copy; 2018 Colorlib Medi+. Designed &amp; Developed by <a href="https://colorlib.com/">Colorlib</a></p>
			</div>
			<div class="col-md-6 col-sm-12 text-md-right text-sm-left">
				<a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
				<a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
				<a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
			</div>
		</div>
	</div>
</footer>
<!-- END footer -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>