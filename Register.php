

<?php
class Register{
   // `ID`, `status`, `FirstName`, `LastName`, `Email`, `Password`, `Phoneno`, `DOB`, `gender`, `TypeID`
    private $FirstName;
     private $LastName;
     private $Email;
     private $Password;
    private $phoneno;
     private $DOB;
     private $gender;
    private $db;
    
    
     function __construct($data)
    {
        $this->setdata($data);
        
        $this->connecttoDb();
        
        $this->registeruser();
        
        
    }
    private function setdata($data)
    {
        $this->FirstName=$data['fname'];
        $this->LastName=$data['lname'];
        $this->Email=$data['mail'];
        $this->Password=$data['password'];
        $this->DOB=$data['date'];
        $this->gender=$data['gender'];
        $this->phoneno=$data['phone'];
        
    }
     private function connecttoDb()
    {
        include_once "DataBase.php";
        $vars=include "vars.php";
       $this->db= new DataBase($vars);
        
    }
    /*
    function registeruser()
    {
        include_once "connection.php";
         $sql="INSERT INTO users(FirstName,LastName,Email,Password,Phoneno,DOB,gender,TypeID,status) VALUES ('$this->FirstName','$this->LastName','$this->Email','$this->Password','$this->phoneno','$this->DOB','$this->gender',1,'pending')";
        $result=mysqli_query($conn,$sql);
         
            if($result)	
            {
                 
      echo '<script src="jquery-3.4.1.min.js"></script>
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
;
            
            return TRUE;
            
            }
            else
             return FALSE;
            
    }*/
    
    function registeruser()
    {
        include_once "connection.php";
        $password=sha1($this->Password);
         $sql="INSERT INTO users(FirstName,LastName,Email,Password,Phoneno,DOB,gender,TypeID,status) VALUES ('$this->FirstName','$this->LastName','$this->Email',' $password','$this->phoneno','$this->DOB','$this->gender',1,'pending')";
       
         $mysqli= NEW MySQLi ('localhost','root','','clinic3');
         $resultSet = $mysqli->query("select Email from users where  Email='$this->Email'");
           
            if (mysqli_num_rows($resultSet) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($resultSet);
            if($this->Email==$row['Email'])
            {
                echo"Email Already exist";
              //  return FALSE;
              return FALSE;
            }
        }else { //here you need to add else condition
            
            $result=mysqli_query($conn,$sql);
 
                 
            echo '<script src="jquery-3.4.1.min.js"></script>
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
        ;
                    
                    return TRUE;
                    
        }
        
         
           
    }
    
    function close()
    {
        $this->db->close();
    }
    
    
    
    
    
}

?>

