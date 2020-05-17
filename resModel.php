<?php
include_once ("Model.php");
require_once("Model.php");
class resModel extends Model {

    




    function readCompany(){
        $db=new Model(); 
        $sql=("SELECT Name FROM company");
        $result=$db->connect()->query($sql);
        if ($result->num_rows > 0){
            return $result;
        }
        else {
            return false;
        }
      }


      function readreservation(){
       // var_dump("7amada1"); 
        $db=new Model(); 
        $sql=("SELECT timemoh FROM reservation");
        $result=$db->connect()->query($sql);
        if ($result->num_rows > 0){
            return $result;
        }
        else {
            return false;
        }
      }


      function saveReservation($nam,$name2,$name3,$name4,$name5,$name6,$name7,$name8){
       
         $db=new Model(); 
         $sql="INSERT INTO reservation(`Name`,`Email`,`datapp`,`timemoh`,`PhoneNum`,`Doctor`,`mess`,`company`)VALUES('$nam','$name2','$name3','$name4','$name5','$name6','$name7','$name8')";
         var_dump($sql);
         $result=$db->connect()->query($sql);
        
       }
 


      function readDoctor(){
        $db=new Model(); 
        $sql=("SELECT FirstName FROM users WHERE TypeID = 1");
        $result=$db->connect()->query($sql);
        //var_dump($result);
        if ($result->num_rows > 0){
            return $result;
        }
        else {
            return false;
        }
      }









}

?>