
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

    <script>
    window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	title:{
    		text: "Statistic's Bar Chart"
    	},
    	axisY: {
    		title: "Count",
    	},
    	data: [{
    		type: "bar",
    		indexLabel: "{y}",
    		indexLabelPlacement: "inside",
    		indexLabelFontWeight: "bolder",
    		indexLabelFontColor: "white",
    		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	}];
    });
    chart.render();

    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
