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

require_once(__ROOT__ . "controller/controller.php");

class CompanyController extends Controller{
	public function insert() {
		$this->model->CompanyView();
	}
}
?>
