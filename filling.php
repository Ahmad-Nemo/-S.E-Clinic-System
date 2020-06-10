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
    session_start();
    include "connection.php";
  ini_set('display_errors',1);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);
    
    
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
    
     
    
    ?>
    <style>
    
      
    </style>
    </head>
<body>
   
    
    <section class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <h1 class="animated fadeInLeftBig"style="font-family: Georgia, serif;
font-size: 27px;
letter-spacing: 0.2px;
word-spacing: 2px;
color: #007bff;
font-weight: 700;
text-decoration: underline solid rgb(68, 68, 68);
font-style: italic;
font-variant: normal;
                                                 text-transform: uppercase;">Medical Appointment</h1>
            <br>
        <br>
            
        
         <div class="form-group">
    <label for="exampleFormControlTextarea1">First name</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="fname"></textarea>
  </div>
         <div class="form-group">
    <label for="exampleFormControlTextarea1">lastname</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="lname"></textarea>
  </div>
         <div class="form-group">
    <label for="exampleFormControlTextarea1">Age</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="age"></textarea>
  </div>
         <div class="form-group">
    <label for="exampleFormControlTextarea1">Email</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="mail"></textarea>
  </div>
         <div class="form-group">
    <label for="exampleFormControlTextarea1">phone number</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="phoneno"></textarea>
  </div>
        <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" name="gender" id="exampleFormControlSelect1">
      <option>male</option>
      <option>female</option>
      
    </select>
      
  </div>
                 <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
  </div>
          <br>
        
        
         <h2 for="exampleFormControlTextarea1">History</h2>
        
        
        <br>
        
      
             <div class="form-group">
    <label for="exampleFormControlTextarea1">Past History</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="pasthist"></textarea>
  </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Smoking</label>
    <select class="form-control" name="smoking" id="exampleFormControlSelect1">
      <option>Smoker</option>
      <option>Non-smoker</option>
         <option>Ex-smoker</option>
      
    </select>
  </div>
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">NO of packs</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="noofpacks"></textarea>
  </div>
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Duration of smoking</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="duration"></textarea>
  </div>
        
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Investigation</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="investigation"></textarea>
  </div>
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Past Medical Treatment</label>
      <?php
             $sql1="SELECT treatname FROM medicalttt";
            $resultset1=mysqli_query($conn,$sql1);
              ?>
   <select class="form-control" name="treatment1" id="exampleFormControlSelect1">
       <?php
       while($rows= mysqli_fetch_array($resultset1))
       {
           $treatmentname1=$rows['treatname'];
           echo "<option value='$treatmentname1'>$treatmentname1</option>";
       }
     
      ?>
    </select>
  </div>
              
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
    <label for="exampleFormControlTextarea1">Respiratory Rate</label>
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
    <label for="exampleFormControlTextarea1">Inspection</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="inspection"></textarea>
  </div>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">Palpation</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="palpation"></textarea>
  </div>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">Percussion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="percussion"></textarea>
              
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
       
        
        <label for="exampleFormControlTextarea1">X-Rays</label><br>
        <input type="file" name="file" >
        <br>
            <div class="form-group">
    <label for="exampleFormControlTextarea1">others</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="others"></textarea>
  </div>
       
        <br>
        <br>
        <br>
        <button type="submit" name="Submit" class="btn btn-primary">Add Patient</button>
          </form>
        
<?php
         $filedestination=0;
        if(isset($_POST["Submit"]))
        {
 
            
            
            
            $file=$_FILES['file'];
                
            $filename=$_FILES['file']['name'];
            $filetmpname=$_FILES['file']['tmp_name'];
            $filesize=$_FILES['file']['size'];
            $fileerror=$_FILES['file']['error'];
            $filetype=$_FILES['file']['type'];
            
            $fileext=explode('.',$filename);
            $fileactualext=strtolower(end($fileext));
            
            $allowed=array('jpg','jpeg','png','pdf');
            
            if(in_array($fileactualext,$allowed)){
                if($fileerror===0){
                    if( $filesize<1000000)
                    {
                        $filenamenew=uniqid('',true).".".$fileactualext;
                        $filedestination='uploads/'.$filenamenew;
                         move_uploaded_file($filetmpname,$filedestination);
           
                      echo "sucess";
                        
                    }else {
                        echo"your file is too big";
                    }
                    
                } else
                {
                  echo "there is error apploading file";   
                }
            }else
            {
                echo "you cannot upload a file of this type";
            }
            
            
                    
            $firstname=$_POST['fname'];
            $lastname=$_POST['lname'];
            $age=$_POST['age'];
            $Email=$_POST['mail'];
            $phoneno=$_POST['phoneno'];
            $gender=$_POST['gender'];
            $address=$_POST['address'];
            $pasthist=$_POST['pasthist'];
            $smoking=$_POST['smoking'];
            $noofpacks=$_POST['noofpacks'];
            $duration=$_POST['duration'];
            $investigation=$_POST['investigation'];
            $pasttreat=$_POST['treatment1'];
            $tempreature=$_POST['temp'];
            $BP=$_POST['BP'];
            $RR=$_POST['RR'];
            $spo2=$_POST['spo2'];
            $pulse=$_POST['pulse'];
            $inspection=$_POST['inspection'];
            $palpation=$_POST['palpation'];
            $percussion=$_POST['percussion'];
            $ausculation=$_POST['auscultation'];
            $medicaltreat=$_POST['treatment'];
            $diagnoses=$_POST['diagnose'];
            $others=$_POST['others'];
             
            $sql2="INSERT INTO `filling`(`FirstName`, `LastName`, `age`, `Email`, `phoneno`, `gender`, `address`,`pasthistory`, `smoking`, `investigation`, `pastmedicaltt`, `tempreature`, `BP`, `RR`, `SpO2`, `pulse`, `inspection`, `palpation`, `percussion`, `auscultation`, `medicalttt`, `diagnosis`,`noofcigarettes`, `duration`, `others`,`Xray`,appointmenttype) VALUES ('$firstname','$lastname','$age','$Email','$phoneno','$gender','$address','$pasthist','$smoking','$investigation','$pasttreat','$tempreature','$BP','$RR','$spo2','$pulse','$inspection','$palpation','$percussion','$ausculation','$medicaltreat','$diagnoses','$noofpacks','$duration','$others','$filedestination','Appointment')";
            $result2=mysqli_query($conn,$sql2);
        
        }
        
        ?>
        
        
        
            </section>
    
    </body>















</html>