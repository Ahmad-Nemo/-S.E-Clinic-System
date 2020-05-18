<?php

require_once("Model.php");
class AddDoctorModel extends Model {

    


    

  


      function saveReservation($firstname,$lastname,$email,$password,$phoneno,$DOB,$gender){
       
         $db=new DBHelper(); 
         $password1=sha1($password);
         $sql="INSERT INTO users(FirstName,LastName,Email,Password,Phoneno,DOB,gender,TypeID,status) VALUES ('$firstname','$lastname','$email','$password1','$phoneno','$DOB','$gender',1,'aproved')";
        $result=$db->connect()->query($sql);
        
       /* if($result)	
		    
                 
      return '<script src="jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
    
       
        
            
        
       Swal.fire({
         position: "top-end",
         icon: "success",
         title: "Your work has been saved",
         showConfirmButton: false,
         timer: 1500
}) 
        
        
    });
    
    </script>'
;*/
       }
 



}

?>