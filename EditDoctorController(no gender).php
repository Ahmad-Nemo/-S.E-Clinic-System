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


		 	$ID = isset( $_POST['ID'] )? $_POST['ID']: false;

		     $Status=isset( $_POST['status'] )? $_POST['status']: false;

		     $firstname = isset( $_POST['fname'] )? $_POST['fname']: false;

		     $lastname = isset( $_POST['lname'] )? $_POST['lname']: false;

		     $email = isset( $_POST['mail'] )? $_POST['mail']: false;

		     $password =isset( $_POST['password'] )? $_POST['password']: false;

		     $phoneno = isset( $_POST['phone'] )? $_POST['phone']: false;

				 $DOB = isset( $_POST['date'] )? $_POST['date']: false;

				 $gender=isset( $_POST['gender'] )? $_POST['gender']: false;

    $this->model->insert($ID,$Status,$firstname,$lastname,
		 $email,$password,$phoneno,$DOB,$gender);

	}
}
?>
