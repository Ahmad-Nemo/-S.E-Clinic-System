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
require_once("connection2.php");
require_once("Model.php");

class CompanyModel extends Model{

public function CompanyView(){
	$dbcon = new dbconnect();
	$conn = $dbcon->connect();

				$Sql1="SELECT * FROM company WHERE ID='".$_POST['ID']."'" ;
				$result1=mysqli_query($conn,$Sql1);

					if($result1)
					{
						$row=mysqli_fetch_array($result1);
						$oldID=$row['id'];
						$oldName=$row['Name'];
						$oldReceit_Value=$row['Receit_Value'];
						$oldEmpCount=$row['EmpCount'];

					}

				if(isset($_POST['Save1']))
				{
				$sql2="UPDATE company SET ID=COALESCE(NULLIF('".$_POST['ID']."',''),ID) ,
				Name=COALESCE(NULLIF('".$_POST['Name']."',''),Name),
				Receit_Value=COALESCE(NULLIF('".$_POST['Receit_Value']."',''),Receit_Value),
				EmpCount=COALESCE(NULLIF('".$_POST['EmpCount']."',''),EmpCount)
				WHERE ID='".$_POST['ID']."'";
					$mysqli= NEW MySQLi ('localhost','root','','clinic3');
					$resultSet = $mysqli->query("select Name from company where  Name='".$_POST['Name']."'");
					if (mysqli_num_rows($resultSet) > 0) {
						$row = mysqli_fetch_assoc($resultSet);
						if($_POST['Name']==$row['Email'])
						{
							echo"Email Already exist";
						  //  return FALSE;
						  return FALSE;
						}
					}else { $result2=mysqli_query($conn,$sql2);
					}		

				
				if($result2){


					$_SESSION['ID']=$_POST['ID'];
					$_SESSION['Name']=$_POST['Name'];
					$_SESSION['Receit_Value']=$_POST['Receit_Value'];
					$_SESSION['EmpCount']=$_POST['EmpCount'];


					header("Location:Company.php");
				}
			
				

		}


			else if(isset($_POST['Save2']))
			{
					$sql3="DELETE FROM company WHERE ID='".$_POST['ID']."'";

					$result3=mysqli_query($conn,$sql3);

					if($result3)
					{
						$_SESSION['ID']=$_POST['ID'];
						$_SESSION['Name']=$_POST['Name'];
						$_SESSION['Receit_Value']=$_POST['Receit_Value'];
						$_SESSION['EmpCount']=$_POST['EmpCount'];

						header("Location:Company.php");
					}
					else
					{
						echo "Deletion Failed";
					}
			}


			else if(isset($_POST['Save3']))
			{

					$sql4="INSERT INTO company(NAME,Receit_Value,EmpCount) VALUES('".$_POST['Name']."','".$_POST['Receit_Value']."','".$_POST['EmpCount']."')";
					$mysqli= NEW MySQLi ('localhost','root','','clinic3');
			 $resultSet = $mysqli->query("select Name from company where  Name='".$_POST['Name']."'");
			 
			 if (mysqli_num_rows($resultSet) > 0) {
				$row = mysqli_fetch_assoc($resultSet);
				if($_POST['Name']==$row['Email'])
				{
					echo"Email Already exist";
				  //  return FALSE;
				  return FALSE;
				}
			}else { //here you need to add else condition
				


					$result4=mysqli_query($conn,$sql4);

					if($result4)
					{
						$_SESSION['ID']=$_POST['ID'];
						$_SESSION['Name']=$_POST['Name'];
						$_SESSION['Receit_Value']=$_POST['Receit_Value'];
						$_SESSION['EmpCount']=$_POST['EmpCount'];

						header("Location:Company.php");
					}
					
			}

 }





	$sql="SELECT * FROM company";
 	$result = mysqli_query($conn,$sql);
 	if (mysqli_num_rows($result) > 0) {
 	echo "<table class='table table-striped table-bordered' >";
 	echo "<th>Company ID</th>"."<th>Company Name</th>"."<th>Receit Value (EGP)</th>"."<th>Number of Employees</th>";

 		 while($row = mysqli_fetch_array($result)) {
 		 echo "<tr><td>".$row['ID']."</td>".
 		 "<td>".$row['Name']."</td>".
 		 "<td>".$row['Receit_Value']." LE</td>".
 		 "<td>".$row['EmpCount']."  Employees</td></tr>";

 		 }
 		 echo "</table>";
 	}
 	else {
 		 echo "<h4>No Company Info yet</h4>";
 	}

}

}
?>
