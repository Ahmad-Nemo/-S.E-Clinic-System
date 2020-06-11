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
        //include_once "connection.php";
        $db1=new DBHelper(); 
        $name3 = date('Y/m/d', strtotime($name3));
        $result = $db1->connect()->query("SELECT * FROM reservation WHERE  timemoh = '".$name4."' AND datapp = '".$name3."'");
        if ( mysqli_num_rows($result) > 0) {
          echo "<script>alert ('Already Reserved this time');</script>";
        } else {
          $db=new DBHelper(); 
          $name3 = date('Y/m/d', strtotime($name3));
          $sql="INSERT INTO reservation(Name,Email,datapp,timemoh,PhoneNum,Doctor,mess,company)VALUES('$nam','$name2','$name3','$name4','$name5','$name6','$name7','$name8')";
          //var_dump($sql);
          $db->connect()->query($sql);
        } 
    }
 
		


      function readDoctor(){
        $db=new DBHelper(); 
        $sql=("SELECT FirstName FROM users WHERE TypeID = 1");
        $this->Doctorname=$db->connect()->query($sql);
        //var_dump($result);
        
      }

      







}

?>