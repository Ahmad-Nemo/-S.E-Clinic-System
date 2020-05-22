<?php

//include("resview.php");
require_once("Controller.php");


class ControlerTable extends Controller
{
   

  

   function readresToday(){
      $this->model->readresToday();
     
   }

   function  getReservationsWeekly(){
      $this->model->getReservationsWeekly();
     
   }


    
}




?>
