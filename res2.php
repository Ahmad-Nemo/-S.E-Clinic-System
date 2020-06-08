
    <?php

include_once('DBHelper.php');
if(isset($_POST['sub'])) 
 {
/*
$name = $_POST['nam'];
$emaile = $_POST['name2'];
$human1 = date('Y/m/d', strtotime($_POST['appointment_date']));
$time = $_POST['appointment_time'];
$ph = $_POST['exampleFormControlInput1'];
$dr = $_POST['Doctors'];
$meg = $_POST['mess'];
$compa = $_POST['comps'];
*/
 
    
$human1 = date('Y/m/d', strtotime($_POST['appointment_date']));

//$sql="INSERT INTO reservation(`Name`,`Email`,`datapp`,`timemoh`,`PhoneNum`,`Doctor`,`mess`,`company`)VALUES('".$name ."','".$emaile."','".$human1."','".$time."','".$ph."','" . $dr. "','" . $meg ."','" . $compa ."')";
//var_dump($sql);
$db=new DBHelper(); 
$result2 = $db->connect()->query("SELECT * FROM reservation WHERE Email = '".$_POST['name2']."' AND timemoh = '".$_POST['appointment_time']."' AND datapp = '".$human1."'");
if ($result2 && mysqli_num_rows($result2) > 0) {
	$message = "Appointment already exists";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("refresh:1; url=resssss.php");
} else {
	$sql="INSERT INTO reservation(`Name`,`Email`,`datapp`,`timemoh`,`PhoneNum`,`Doctor`,`mess`,`company`)VALUES('".$_POST['nam'] ."','".$_POST['name2']."','".$human1."','".$_POST['appointment_time']."','".$_POST['exampleFormControlInput1']."','" . $_POST['Doctors'] . "','" . $_POST['mess'] ."','" . $_POST['comps'] ."')";
	$result=$db->connect()->query($sql);
	header("refresh:1; url=index.php");
}
//return $result;
// the message
             //  $msg = "you have reserved at DR Hisham medical center";
               //$email=$_POST['name2'];

              // use wordwrap() if lines are longer than 70 characters
           //   $msg = wordwrap($msg,70);

// send email
             //   mail("$email","Dr.Hisham Mortada Medical Center",$msg);
      
 }
 //header("refresh:1; url=index.php");
 
?>