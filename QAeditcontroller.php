 <?php




if(isset($_POST["update"]))
{ 
    $qaid = $_GET['setid'];
   
    $Q = $_POST['text1'];
    $A = $_POST['text2'];

    include "QAeditmodel.php";
    $QAeditmodel= new QAeditmodel($Q,$A,$qaid);
   
   
}
?>