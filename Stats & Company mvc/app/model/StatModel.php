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


require_once(__ROOT__ . "model/model.php");

class StatModel extends Model{

public function Stat_View(){

	$dbcon = new dbconnect();
  $conn = $dbcon->connect();

	$sql="SELECT SUM(DISTINCT c.EmpCount) AS SPCOUNT,COUNT(DISTINCT c.ID)
	 AS COMPANYCOUNT,COUNT(DISTINCT f.ID) AS NPCOUNT,COUNT(DISTINCT u.ID) AS DOCTORCOUNT FROM company
	 AS c,filling AS f, users AS u  WHERE (f.Supported = '0') AND (u.TypeID= '1') ";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
	echo "<table class='table table-striped table-bordered' >";
	echo "<th>Number of Normal Patients</th>"."<th>Number of Special Patients</th>"."<th>Number of Companies</th>"."<th>Number of Doctors</th>";

		 while($row = mysqli_fetch_array($result)) {
			 echo "<tr><td>".$row['NPCOUNT']." Patients</td>"
			 ."<td>".$row['SPCOUNT']." Patients</td>"
			 ."<td>".$row['COMPANYCOUNT']." Companies</td>"
			 ."<td>".$row['DOCTORCOUNT']." Doctors</td></tr>";

			 	$Npcount = $row['NPCOUNT'];
			   $Spcount=$row['SPCOUNT'];
			   $Ccount=$row['COMPANYCOUNT'];
			   $Dcount=$row['DOCTORCOUNT'];



		 }
		 echo "</table>";
	}
	else {
		 echo "<h4>No Statistics avialable yet</h4>";
	}

	 $dataPoints = array(
	array("y" => $Npcount,"label" => "Normal Patients" ),
	array("y" => $Spcount,"label" => "Special Patients" ),
	array("y" => $Ccount,"label" => "Companies" ),
	array("y" => $Dcount,"label" => "Doctors" )
	);

?>

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
	            		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK) ;?>

	            	}]
	            });

	            chart.render();

	            }
	            </script>

<?php
}

}





?>
