<?php

require_once("Model.php");
class DeleteDoctorModel extends Model {
private $data;
 
function getusers()
{
    return $this->data;
}

      function retriveuser(){
       
         $db=new DBHelper(); 
         $sql="Select * from users ";
         $this->data=$db->connect()->query($sql);
     
       }
 

       function deleteuser($id){

        $db=new DBHelper(); 
        $sql=" Delete From users where id='$id'";
        $result=$db->connect()->query($sql);
       }

}

?>