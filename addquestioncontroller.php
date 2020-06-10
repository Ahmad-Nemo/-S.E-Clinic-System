 <?php
    
    
if(isset($_POST['create']))
{ 
   
    $Q = $_POST['text1'];
    $A = $_POST['text2'];
    
    include "addquestionmodel.php";
    $addquestionmodel =new addquestionmodel($Q,$A);
    
    
}
    ?>