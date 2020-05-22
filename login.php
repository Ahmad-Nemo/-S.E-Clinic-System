<?php session_start();
class login {
    
    
    private $username;
    private $password;
    private $db;
   
    
    function __construct($username,$password){
        
    
        $this->setdata($username,$password);
        
        $this->connecttoDb();
        
        $this->getdata();
        
        
        
    }
   private function setdata($username,$password)
    {
        $this->username=$username;
        $this->password=$password;
        
        
    }
    private function connecttoDb()
    {
        include_once "DataBase.php";
        $vars=include "vars.php";
       $this->db= new DataBase($vars);
        
    }
    private function getdata()
    {
         
         include_once "connection.php";
     
            
        $sql="SELECT * FROM users WHERE Email='$this->username' AND Password ='$this->password'"; 
        $sql2="SELECT TypeID FROM users WHERE Email ='$this->username'";
        $sql3="SELECT status FROM users WHERE Email ='$this->username'";
        $result=mysqli_query($conn,$sql);
        $result2 = mysqli_query($conn,$sql2);
        $result3 = mysqli_query($conn,$sql3);
        
          if($row3=mysqli_fetch_array($result3))
             
        {
            $_SESSION["userstatus"]=$row3[0];
        }
        if($row2=mysqli_fetch_array($result2))            
        {
              $_SESSION["usertype"]=$row2[0];
        }
        
           
       
        if($row=mysqli_fetch_array($result))	
	    {
            
          
            return TRUE;
             
        }
	    else	
	    {
            $_SESSION["error"]="Invalid username or password";
           
           header("Location:loginview.php");
           
		
          
           
         
           // echo "<script> alert('invalid');</script>";
           // return "2";
        }
       
           
       }    
      
        function close()
        {
            $this->db->close();
        }
    
    
    
}



?>