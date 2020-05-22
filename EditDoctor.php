<?php

ini_set('display_errors',0);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);

?>


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


<?php

include_once ("Admin.php");
// require_once("EditDoctorView.php");
require_once("EditDoctorController.php");
require_once("EditDoctorModel.php");



$model=new EditDoctorModel();
$controller=new EditDoctorController($model);
// $view = new EditDoctorView($controller,$model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
      $controller->{$_GET['action']}();
    }

// echo $view ->output();

?>


<body>



<div class="container">
	<h3>Please Edit A Doctor</h3>
<form action = "EditDoctor.php?action=insert" name="Edit" id ="Edit" method="post" >

<b id="label">Doctor's ID</b>
<br>
<div class="form-group">
<input type="text" id="ID" Name="ID" style="width:70%;" class="form-control" required>
<br>
</div>
<b id="label">Status</b>
<br>
<br>
<form action="" id="status" Name="Status">
  <input type="radio" name="status" value="Approved"> Approved<br>
  <input type="radio" name="status" value="pending"> Pending<br>
</form>
<b id="label">First Name</b>
<br>
<div class="form-group">
<input  type="text" id="fname" Name="fname" style="width:70%;" class="form-control" pattern="[A-Za-z]{2,}"placeholder="Enter Your First Name" title="can`t contain numbers" required  autofocus>
<br>
</div>
<b id="label">Last Name	</b>
<br>
<div class="form-group">
<input  type="text" id="lname" Name="lname" style="width:70%;" class="form-control" pattern="[A-Za-z]{2,}"placeholder="Enter Your last Name" title="can`t contain numbers" required autofocus>
<br>
</div>
<b id="label">Email</b>
<br>
<div class="form-group">
<input  type="text" id="mail" Name="mail" style="width:70%;" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" placeholder="name@example.com" required autofocus>
<br>
</div>
<b id="label">Password</b>
<br>
<div class="form-group">
<input  type="password" id="password" Name="password" style="width:70%;" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  autofocus>
<br>
</div>
<b id="label">Phone Number</b>
<br>
<div class="form-group">
<input  type="text" id="phone" Name="phone" style="width:70%;" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
<br>
</div>
<b id="label">DOB</b>
<br>
<div class="form-group">
<input  type="date" id="date" Name="date" style="width:70%;" class="form-control"  value="2020-05-19"min="1950-01-01" max="<?php echo date('Y-m-d');?>" required>
<br>
</div>
<b id="label">Gender</b>
<br>
<form action="" id="gender" Name="gender">
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
</form>
<br>
<div class = "form-group">
<button type="submit" form = "Edit" name="submit" id="submit" class="btn btn-primary">submit</button>
</div>


</form>
</div>

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
