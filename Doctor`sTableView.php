<html>
<head>
   <?php ini_set('display_errors',1);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);
include_once ("Doctor`sTableModel.php");
include_once("Doctor`sTableController.php");
$model=new ModelTable();
$controller=new ControlerTable($model);


if (isset($_GET['action']) && !empty($_GET['action'])) {
 $controller->{$_GET['action']}();
}
    ?>
    </head>
<body>
    <?php  if(!isset($_SESSION))
    {
      session_start();
    }
    if($_SESSION['usertype']==1)
    {
        include "DoctorPage.php";
   }
    else if($_SESSION['usertype']==3)
    {
         
        include "Admin.php";
    }
     else if($_SESSION["usertype"] ==  2)
     {
         include "secretairy.php";
         
     }?>
<?php
//include ("connection.php");
//include ("DBHelper.php");
//$_SESSION['Name']
//$sql="SELECT * FROM reservation WHERE current_date = datapp ";
    //$result = mysqli_query($conn,$sql);
    $controller->readresToday();
    $controller->getReservationsWeekly();
    //$result=$model->getReservationsWeekly();
    //var_dump($result);
    $result=$model->getReservationsToday();
	if (mysqli_num_rows($result) > 0) {

	?>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">time</th>
      <th scope="col">phone number</th>
      <th scope="col">message</th>
      <th scope="col">Company

      </th>
    </tr>
  </thead>

<?php
           
                $num =1;
            while($row = mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td>".$num."</td>";
              echo "<td>".$row["Email"]."</td>";
              echo "<td>".$row["timemoh"]."</td>";
              echo "<td>".$row["PhoneNum"]."</td>";
              echo "<td>".$row["mess"]."</td>";
              echo "<td>".$row["company"]."</td>";
   
              
              
                
    
              $num++;
            }
          }
          else{
            echo "<tr>";
            echo "<td><h2>No Data to Show</h2></td>";
            echo "</tr>";
          }
           
           
           
           
           
           
           
	  
?>
    </table>
    </body>
    
    
    </html>