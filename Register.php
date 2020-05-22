

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
    function registeruser()
    {
        include_once "connection.php";
         $sql="INSERT INTO users(FirstName,LastName,Email,Password,Phoneno,DOB,gender,TypeID,status) VALUES ('$this->FirstName','$this->LastName','$this->Email','$this->Password','$this->phoneno','$this->DOB','$this->gender',1,'pending')";
        $result=mysqli_query($conn,$sql);
             
            if(isset($_POST['Apply'])){

                $query="SELECT Email From User 
                Where Email = :Email ";
                $result = $conn->query($sql);
                if ($result->num_rows == 0) {
                   
                }
                  } else {
                    echo "Entered Email is not correct Please enter the correct email";
                  }
            }

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
            
    }
    function close()
    {
        $this->db->close();
    }
    
    
    
    
    
}

?>

