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

require_once("controller.php");

class EditDoctorController extends Controller{
	 function insert(){


		$ID = $_REQUEST["ID"];

    $Status=$_REQUEST["Status"];

    $firstname = $_REQUEST["fname"];

    $lastname = $_REQUEST["lname"];

    $email = $_REQUEST["mail"];

    $password = $_REQUEST["password"];

    $phoneno = $_REQUEST["phone"];

    $DOB = $_REQUEST["date"];

    $gender=$_REQUEST["gender"];

    $this->model->insert($ID,$Status,$firstname,$lastname,
		 $email,$password,$phoneno,$DOB,$gender);

	}
}
?>
