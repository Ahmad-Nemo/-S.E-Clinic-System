<?php

//include("resview.php");
require_once("Controller.php");


class AddDoctorController extends Controller
{
   

  

   


   function insertuser()
   {
      
      $firstname = $_REQUEST["fname"];
        
      $lastname = $_REQUEST["lname"];
      
      $email = $_REQUEST["mail"];
      
      $password = $_REQUEST["password"];
      
      $phoneno = $_REQUEST["phone"];
      
      $DOB = $_REQUEST["date"];
      
      $gender=$_REQUEST["gender"];

      $this->model->saveReservation( $firstname,$lastname, $email,$password,$phoneno,$DOB,$gender);
   }

    function validatedate()
    {   

        $result=$resmodel->readreservation();
        $result2=$_REQUEST['appointment_time'];
    // var_dump($result2);
      }
    
}




?>
