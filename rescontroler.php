<?php
include_once("Controller.php");
include_once("resModel.php");
//include("resview.php");
require_once("Controller.php");
require_once("resModel.php");

class rescontroler extends Controller
{
     protected $resmodel;

  

    public function __construct() {
    
       $resmodel= new resmodel;
      }




    function validatedate()
    {   

        $result=$resmodel->readreservation();
        $result2=$_REQUEST['appointment_time'];
     var_dump($result2);
      }
    
}




?>
