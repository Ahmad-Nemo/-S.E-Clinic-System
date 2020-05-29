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
		<title>Add News</title>

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

{
 margin-top: 100px;
 margin-bottom: 100px;
 margin-right: 150px;
 margin-left: 80px;
}
</style>


<?php


include_once("connection.php");
include_once("DBHelper.php");
include_once ("Admin.php");
require_once("AddNewsView.php");
require_once("AddNewsController.php");
require_once("AddNewsModel.php");




$model=new AddNewsModel();
$controller=new AddNewsController($model);
$view = new AddNewsView($controller,$model);



 echo $view ->output();

?>

<body>
    <section class="container">

    <h1>Add News</h1>

<form name="NewsForm" id="NewsForm" action="" method="post">
            <br>
			<div class="form-group">

				<label for="Title" class="text-black">Title</label>
				<input type="text" class="form-control" id="Title" name ="Title"  placeholder="Enter Title to be shown"  required  autofocus>

			<br>

                <label for="Writing" class="text-black">Text</label>
                <input type="text" class="form-control" id="Writing" name ="Writing"  placeholder="Enter Text to be shown"  required  autofocus>

				<br>

                <input type="submit" name="sub" form="NewsForm" value="Add" class="btn btn-primary">
              </div>
            </form>

</section>


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
