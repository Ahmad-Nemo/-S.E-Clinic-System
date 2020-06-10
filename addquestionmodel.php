<?php


class addquestionmodel{

private $Q;
private $A;

    
    
    
    function __construct($Q,$A){
        
        
        $this->setdata($Q,$A);
        
        
        
                          
                          
                          
                          
                          }
    
    
    
    
        
        
                    
    function setdata($Q,$A)
    {
        include_once "connection.php";
        $this->Q=$Q;
        $this->A=$A;
       
        
        $sql="INSERT INTO qa (question,answer) VALUE ('".$Q."','".$A."')";
        
    if (mysqli_query($conn,$sql))   
    {
       echo "<script>
       alert('Added succesfully');
       </script>";
    }
    else {
        echo "<script>
        alert('Addition failed');
        </script>";
    }
    }
    
    


}
