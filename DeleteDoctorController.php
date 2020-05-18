<?php

//include("resview.php");
require_once("Controller.php");


class DeleteDoctorController extends Controller
{
   
   function retriveuser()
   {
      $this->model->retriveuser();
   }

    function deleteuser()
    { 
       $id=$_REQUEST[$row[0]];
      $this->model->deleteuser($id);
    }
    
}




?>
