<?php

//include("resview.php");
require_once("Controller.php");


class EditePasswordController extends Controller
{
   

  

   

   function UpdatePass()
   {
      $Pass1=$_REQUEST['password1'];
      $Pass2=$_REQUEST['password2'];
     

      $this->model->savePass($Pass1, $Pass2);
   }

   
    
}




?>
