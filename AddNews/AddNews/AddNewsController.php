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

class AddNewsController extends Controller{
	 function insert(){

		 		$Title = isset( $_POST['Title'] )? $_POST['Title']: false;

		     $Text = isset( $_POST['Writing'] )? $_POST['Writing']: false;

    $this->model->ViewNews($Title,$Text);

	}
}
?>
