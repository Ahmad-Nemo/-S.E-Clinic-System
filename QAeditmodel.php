<?php


class QAeditmodel{

private $Q;
private $A;
private $qaid;
    
    
    
    function __construct($Q,$A,$qaid){
        
        
        $this->setdata($Q,$A,$qaid);
        
        
        
                          
                          
                          
                          
                          }
    
    
    
    
        
        
                    
    function setdata($Q,$A,$qaid)
    {
        include_once "connection.php";
        $this->Q=$Q;
        $this->A=$A;
        $this->qaid=$qaid;
        
         $sql="update qa SET question ='$this->Q' where qa_id =$this->qaid";
         $sql1="update qa SET answer ='$this->A' where qa_id =$this->qaid";
    
    if (mysqli_query($conn,$sql) && mysqli_query($conn,$sql1))   
    {
       echo "<script>
       alert('updated succesfully');
       </script>";
    }
    else {
        echo "<script>
        alert('update failed');
        </script>";
    }
    }
    
    


}



?>