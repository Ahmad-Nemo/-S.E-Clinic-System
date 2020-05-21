<?php

//include("resview.php");
require_once("Controller.php");


class ApproveController extends Controller
{
   
   function retriveuserpending()
   {
      $this->model->retriveuserpending();
   }

    function isdeleteuser()
    { 
       $id=$_REQUEST[$row[0]];
      //$this->model->deleteuser($id);
    }
    
}




?>
