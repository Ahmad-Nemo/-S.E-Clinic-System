<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <?php
    
    include "connection.php";
    
     include "login.php";
    if(!isset($_SESSION['usertype']))
   {
      header ("Location:index.php");
    }
    
    
    if(!isset($_SESSION))
   {
      session_start();
    }
    
     if($_SESSION['usertype']==1)
    {
        include "DoctorPage.php";
   }
    else if($_SESSION['usertype']==3)
    {
        include "Admin.php";
    }
     else if($_SESSION['usertype']==2)
    {
        include "secretairy.php";
    }
    //include "error_log.php";
    ini_set('display_errors',1);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);
    ?>
    <style>
    
      
    </style>
    </head>
<body>
   
    
    <section class="container">
    <form action="fillingcontroller.php" method="post" enctype="multipart/form-data">
        <h1 class="animated fadeInLeftBig"style="font-family: Georgia, serif;
font-size: 27px;
letter-spacing: 0.2px;
word-spacing: 2px;
color: #007bff;
font-weight: 700;
text-decoration: underline solid rgb(68, 68, 68);
font-style: italic;
font-variant: normal;
                                                 text-transform: uppercase;">Medical Consultation</h1>
            <br>
        <br>
        
         <div class="form-group">
    <label for="exampleFormControlTextarea1">First name</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="fname"></textarea>
  </div>
         <div class="form-group">
    <label for="exampleFormControlTextarea1">lastname</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="lname"></textarea>
  </div>
         <div class="form-group">
    <label for="exampleFormControlTextarea1">Age</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="age"></textarea>
  </div>
         <div class="form-group">
    <label for="exampleFormControlTextarea1">Email</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mail"></textarea>
  </div>
         <div class="form-group">
    <label for="exampleFormControlTextarea1">phone number</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="phoneno"></textarea>
  </div>
        <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" name="gender" id="exampleFormControlSelect1">
      <option>male</option>
      <option>female</option>
      
    </select>
      
  </div>
                <div class="form-group">
    <label for="exampleFormControlTextarea1">Company</label>
            <?php
             $sql2="SELECT Name FROM company";
            $resultset2=mysqli_query($conn,$sql2);
              ?>
        <select class="form-control" name="company" id="exampleFormControlSelect1">
       <?php
       while($rows= mysqli_fetch_array($resultset2))
       {
           $treatmentname2=$rows['Name'];
           echo "<option value='$treatmentname2'>$treatmentname2</option>";
       }
            
           
     
      ?>
    </select>
        </div>
                 <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
  </div>
          <br>
          <br>
        
        
         <h2 for="exampleFormControlTextarea1">General Examination</h2>
        
        
        <br>
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Tempreature</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="temp"></textarea>
  </div>
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Blood Preasure</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="BP"></textarea>
  </div>
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">R.R</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="RR"></textarea>
  </div>
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">SpO2</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="spo2"></textarea>
  </div>
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Examined pulse</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pulse"></textarea>
  </div>
           <br>
        
        
         <h2 for="exampleFormControlTextarea1">local Examination</h2>
        
        
        <br>
        
          <div class="form-group">
    <label for="exampleFormControlTextarea1">Palpation</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="palpation"></textarea>
  </div>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">Percussion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="percussion"></textarea>
              
  </div>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">Inspection</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="inspection"></textarea>
  </div>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">  auscultation</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="auscultation"></textarea>
  </div>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">  Medical Treatment</label>
              <?php
             $sql="SELECT treatname FROM medicalttt";
            $resultset=mysqli_query($conn,$sql);
              ?>
   <select class="form-control" name="treatment" id="exampleFormControlSelect1">
       <?php
       while($rows= mysqli_fetch_array($resultset))
       {
           $treatmentname=$rows['treatname'];
           echo "<option value='$treatmentname'>$treatmentname</option>";
       }
     
      ?>
    </select>
        </div>
              <div class="form-group">
    <label for="exampleFormControlTextarea1">  Diagnosis</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="diagnose"></textarea>
  </div>
        
          <div class="form-group">
    <label for="exampleFormControlTextarea1">  improvement</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="improve"></textarea>
  </div>
        
          <div class="form-group">
    <label for="exampleFormControlTextarea1">  Other comments</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="others"></textarea>
  </div>
        
        <label for="exampleFormControlTextarea1">X-Rays</label><br>
        <input type="file" name="file" id="insert" value="Insert" class="btn btn-info">
        <br>
        <label for="exampleFormControlTextarea1">Other files</label><br>
        <input type="file" name="otherdoc" id="insert" value="Insert" class="btn btn-info">
        <br>
        <br>
        <br>
        <br>
        <button type="submit" name="Submit1" class="btn btn-primary">Add Patient</button>
        </form>
    </section>
    </body>
</html>