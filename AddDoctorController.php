<?php

//include("resview.php");
require_once("Controller.php");


class AddDoctorController extends Controller
{
   

  

   


   function insertuser()
   {
      
      $firstname = $_POST["fname"];
        
      $lastname = $_POST["lname"];
      
      $email = $_POST["mail"];
      
      $password = $_POST["password"];
      
      $phoneno = $_POST["phone"];
      
      $DOB = $_POST["date"];
      
      $gender=$_POST["gender"];

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
