<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/animate.css">
<title>Add Question</title>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
    *{
        
    }
    
    </style>
</head>
<?php
    session_start();
    include_once("connection.php");
   
 

     ?> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/animate.css">

<body>
<?php 
   

include "header.php"; ?>




     <form action="" method="post">
  <div class="form-group" style="allign=center;
                                  margin-left: 110px;
        margin-right: 50px;">
   
    <div >
    <label >Question</label>
    <textarea name='text1' class='form-control' rows='5' ></textarea>
    
  </div>

  </div>
  <div class="form-group" style="allign=center;
                                  margin-left: 110px;
        margin-right: 50px;">
    <label for="exampleInputPassword1">Answer</label>
    <textarea name='text2' class='form-control' rows='5' ></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary" name="create" style="
                                  margin-left: 110px;
                                  margin-right: 50px;"> ADD Q&A </button>
         <button type='button' class='btn btn-secondary' name="cancel" onclick='goBack()'>Cancel</button>
          <script>
          function goBack() {
            window.location.href="Q&A.php";
          }
          </script>
</form>
      

    <?php
    
    
if(isset($_POST['create']))
{ 
   
    $Q = $_POST['text1'];
    $A = $_POST['text2'];
    $sql="INSERT INTO qa (question,answer) VALUE ('".$Q."','".$A."')";
    
   $result=mysqli_query($conn,$sql);
   if($result)
   {
     $sqlnew="select qa_id from qa where question='".$Q."' ";
     $result5=mysqli_query($conn,$sqlnew) or die (mysqli_error($conn));
     $row1 = mysqli_fetch_assoc($result5);
       echo "<div class='alert alert-success' role='alert'><strong>
 Q&A added successfully</strong>
</div>";
   echo "<button class='btn btn-primary'  onclick='goBack()' style='margin-left: 90;' > View added Q&A </button>";
   }else{
echo mysqli_error($conn);


   }
   
   
   
    exit();
    

}
?>
  

  
<br><br>








    

</body>
</html>