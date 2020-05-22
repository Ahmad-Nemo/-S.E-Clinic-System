<?php

require_once("Model.php");
class AddDoctorModel extends Model {

    


    

  


      function saveReservation($firstname,$lastname,$email,$password,$phoneno,$DOB,$gender){
       
         $db=new DBHelper(); 
         $password1=sha1($password);
         $sql="INSERT INTO users(FirstName,LastName,Email,Password,Phoneno,DOB,gender,TypeID,status) VALUES ('$firstname','$lastname','$email','$password1','$phoneno','$DOB','$gender',1,'Approved')";
        
         $mysqli= NEW MySQLi ('localhost','root','','clinic3');
         $resultSet = $mysqli->query("select Email from users where  Email='$email'");
         if (mysqli_num_rows($resultSet) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($resultSet);
            if($email==$row['Email'])
            {
                echo"Email Already exist";
              //  return FALSE;
              return FALSE;
            }
        }else { //here you need to add else condition
            

         $result=$db->connect()->query($sql);
        }
       }
 



}

?>