<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/animate.css">
<title>Add Question</title>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
   
    
    </style>
</head>
<?php
   
    include_once("connection.php");
   
 

     ?> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/animate.css">

<body>
<?php 
   

include "Admin.php"; 
      if(!isset($_SESSION))
   {
      session_start();
    }
    
    include_once "login.php";
if(!isset($_SESSION['usertype']))
{
   header("Location:index.php");

 }
    ?>




     <form action="addquestioncontroller.php" method="post">
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
    </body>
</html>