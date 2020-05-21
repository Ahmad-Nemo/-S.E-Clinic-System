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
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/StatModel.php");
require_once(__ROOT__ . "controller/StatController.php");
require_once(__ROOT__ . "view/StatView.php");
require_once("Admin.php");

$model = new StatModel();
$controller = new StatController($model);
$view = new StatView($controller, $model);


			echo $view->output();

?>

    <!DOCTYPE HTML>
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
    		<title>Statistics</title>

    				<!-- END header -->
    				<link rel="stylesheet" href="css/style.css">




    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



</body>
</html>
