<?php

require_once("Model.php");
class resModel extends Model {

    

    private $Companyname;
    private $Doctorname;

    
function getCompanyname()
{
    return $this->Companyname;
}

function getdoctor()
{
    return $this->Doctorname;
}
    function readCompany(){
        $db=new DBHelper(); 
        $sql=("SELECT Name FROM company");
        $this->Companyname=$db->connect()->query($sql);
        
      }


      function readreservation(){
       
        $db=new DBHelper(); 
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
       
         $db=new DBHelper(); 
         $name3 = date('Y/m/d', strtotime($name3));
         $sql="INSERT INTO reservation(`Name`,`Email`,`datapp`,`timemoh`,`PhoneNum`,`Doctor`,`mess`,`company`)VALUES('$nam','$name2','$name3','$name4','$name5','$name6','$name7','$name8')";
         //var_dump($sql);
        $db->connect()->query($sql);
        
       }
 


      function readDoctor(){
        $db=new DBHelper(); 
        $sql=("SELECT FirstName FROM users WHERE TypeID = 1");
        $this->Doctorname=$db->connect()->query($sql);
        //var_dump($result);
        
      }

      







}

?>