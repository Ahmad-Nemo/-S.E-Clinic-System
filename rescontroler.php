<?php

//include("resview.php");
require_once("Controller.php");


class rescontroler extends Controller
{
   

  

   function  readCompany(){
      $this->model->readCompany();
     
   }

   function  readdoctor(){
      $this->model->readDoctor();
     
   }

   function insertresresrvation()
   {
      //`Name`,`Email`,`datapp`,`timemoh`,`PhoneNum`,`Doctor`,`mess`,`company`
      $Name=$_REQUEST['nam'];
      $Email=$_REQUEST['name2'];
      $datapp=$_REQUEST['appointment_date'];
      $timemoh=$_REQUEST['appointment_time'];
      $PhoneNum=$_REQUEST['exampleFormControlInput1'];
      $Doctor=$_REQUEST['Doctors'];
      $mess=$_REQUEST['mess'];
      $company=$_REQUEST['comps'];

      $this->model->saveReservation($Name,$Email,$datapp,$timemoh,$PhoneNum,$Doctor,$mess,$company);
   }

    function validatedate()
    {   

        $result=$resmodel->readreservation();
        $result2=$_REQUEST['appointment_time'];
    // var_dump($result2);
      }
    
}




?>
