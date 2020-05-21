<?php

require_once("Admin.php");


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


<script>
$(document).ready(function (){
	$("#Edit").on('click',function(){
		$("#form1").toggle();
		$("#form2").hide();
		$("#form3").hide();
	});
});

$(document).ready(function (){
	$("#Delete").on('click',function(){
		$("#form2").toggle();
		$("#form1").hide();
		$("#form3").hide();

	});
});

$(document).ready(function (){
	$("#Add").on('click',function(){
		$("#form3").toggle();
		$("#form1").hide();
		$("#form2").hide();

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



<?php

include_once("Admin.php");
include_once("headeradmin.php");

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/CompanyModel.php");
require_once(__ROOT__ . "controller/CompanyController.php");
require_once(__ROOT__ . "view/CompanyView.php");

$model = new CompanyModel();
$controller = new CompanyController($model);
$view = new CompanyView($controller, $model);


			echo $view->output();

?>

<body>

<hr><hr><br>

<button class="btn btn-default" id = "Edit" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" >Edit</button>
<button class="btn btn-default" id = "Delete" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" >Delete</button>
<button class="btn btn-default" id = "Add" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" >Add</button>


<form id="form1" action = "company.php" style = "display:none; margin:0.5%;" method="post">

	<hr>
	<h3>Please Edit A company</h3>

<b id="label">Company ID</b>
<br>
<div class="form-group">
<input type="text" id="ID"  Name="ID" style="width:70%;" class="form-control">
<br>
</div>


<b id="label">Name</b>
<br>
<div class="form-group">
<input  type="text" id="Name" Name="Name" style="width:70%;" class="form-control">
<br>
</div>
<b id="label">Receit Value</b>
<br>
<div class="form-group">
<input  type="text" id="Receit_Value" value="10" Name="Receit_Value" style="width:70%;" class="form-control">
<br>
</div>
<b id="label">Employees Count</b>
<br>
<div class="form-group">
<input  type="text" id="EmpCount" Name="EmpCount" value="10" style="width:70%;" class="form-control">
<br>
</div>
<input class="btn btn-default" type="Submit" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" Value="Save" id="Save1" Name="Save1">
<input class="btn btn-default" type="reset" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" Value="Reset" id="reset" Name="Reset">
</form>

<form id="form2" action = "company.php" style = "display:none; margin:0.5%;" method="post">

	<hr>
	<h3>Please Delete A company</h3>

<b id="label">Company ID</b>
<br>
<div class="form-group">
<input type="text" id="ID" Name="ID" style="width:70%;" class="form-control">
<br>
</div>
<input class="btn btn-default"  type = "Submit" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" Value="Save" id="Save2" Name="Save2">
<input class="btn btn-default" type="reset" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" Value="Reset" id="reset" Name="Reset">
</form>

<form id="form3" action = "company.php" style = "display:none; margin:0.5%;" method="post">

<hr>
<h3>Please Add A company</h3>

<b id="label">Name</b>
<br>
<div class="form-group">
<input  type="text" id="Name" name="Name"  style="width:70%;" class="form-control">
<br>
</div>
<b id="label">Receit Value</b>
<br>
<div class="form-group">
<input  type="text" id="Receit_Value" name="Receit_Value" value="10" id="reciet" style="width:70%;" class="form-control">
<br>
</div>
<b id="label">Employees Count</b>
<br>
<div class="form-group">
<input  type="text" id="EmpCount" name="EmpCount" value="10" id="emp" style="width:70%;" class="form-control">
<br>
</div>

<input class="btn btn-default" type="Submit" style = "color: white;background-color: #212121 ; font-size: 20px; width:15%; margin:0.2%;" Value="Save" id="Save3" Name="Save3">
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
    <script>
    document.getElementById("reciet").defaultValue = "100";
    document.getElementById("emp").defaultValue = "50";




    </script>
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
