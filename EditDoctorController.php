<?php

//include("resview.php");
require_once("Controller.php");


class EditDoctorController extends Controller
{
   
   function updateuser()
   {
    $ID = $_REQUEST["ID"];

    $Status=$_REQUEST["Status"];

    $firstname = $_REQUEST["fname"];
        
    $lastname = $_REQUEST["lname"];
    
    $email = $_REQUEST["mail"];
    
    $password = $_REQUEST["password"];
    
    $phoneno = $_REQUEST["phone"];
    
    $DOB = $_REQUEST["date"];
    
    $gender=$_REQUEST["gender"];
      $this->model->updateuser($ID,$Status,$firstname,$lastname, $email,$password,$phoneno,$DOB,$gender);
   }

    
    
}




?>
