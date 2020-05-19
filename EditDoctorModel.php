<?php

require_once("Model.php");
class EditDoctorModel extends Model {
private $data;
 
function getusers()
{
    return $this->data;
}

      function updateuser($ID,$Status,$firstname,$lastname, $email,$password,$phoneno,$DOB,$gender){
        $db=new DBHelper(); 
        $password1=sha1($password);
        $sql="UPDATE users SET ID='".$_POST['ID']."',status='".$_POST['status']."' ,FirstName='".$_POST['FirstName']."',LastName='".$_POST['LastName']."',Email='".$_POST['Email']."',Password='$password',
        Phoneno='".$_POST['Phoneno']."',DOB='".$_POST['DOB']."',gender='".$_POST['gender']."' WHERE ID='".$_POST['ID']."'";
        $result2=$db->connect()->query($sql);
        if($result2)
        {
            
        }
        else
        {
            echo "Edit Failed";
        }
     
       }
 

       function deleteuser($id){

        $db=new DBHelper(); 
        $sql=" Delete From users where id='$id'";
        $result=$db->connect()->query($sql);
       }

}

?>