<?php

require_once("Model.php");
class ApproveRegistrationModel extends Model {
private $data;
 
function getuser()
{
    return $this->data;
}

      function retriveuserpending(){
       
         $db=new DBHelper(); 
         $sql="Select * from users where status = 'pending' ";
         $this->data=$db->connect()->query($sql);
     
       }
 

       function deleteuser($id){

        $db=new DBHelper(); 
        $sql=" Delete From users where id='$id'";
        $result=$db->connect()->query($sql);
       }

}

?>