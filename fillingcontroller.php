<?php
ini_set('display_errors',1);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);


session_start();



       
       
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
                        echo "<script>alert ('your file is too big');</script>";
                      //  header ('location: appointmentview.php');
                    }
                    
                } else
                {
                 echo "<script>alert ('there is an error uploading file');</script>";
                   // header ('location: appointmentview.php');
                }
            }else
            {
              echo "<script>alert ('No file is selected please choose a file with the right extention');</script>";
                //header ('location: appointmentview.php');
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
    
    include "filemodel.php";
    $filemodel=new filemodel($firstname, $lastname,$age,$Email,$phoneno,$gender,$address,$pasthist,$smoking,$noofpacks,$duration,$investigation,$pasttreat,$tempreature,$BP,$RR,$spo2,$pulse,$inspection,$palpation,$percussion,$ausculation,$medicaltreat,$diagnoses,$others,$filedestination);
            
          
                
                
            }
                if(isset($_POST["Submit1"]))
        {
 
            
            
            
            $file=$_FILES['file'];
                
            $filename=$_FILES['file']['name'];
            $filetmpname=$_FILES['file']['tmp_name'];
            $filesize=$_FILES['file']['size'];
            $fileerror=$_FILES['file']['error'];
            $filetype=$_FILES['file']['type'];
                    
                    $otherfile=$_FILES['otherdoc'];
                
            $otherfilename=$_FILES['otherdoc']['name'];
            $otherfiletmpname=$_FILES['otherdoc']['tmp_name'];
            $otherfilesize=$_FILES['otherdoc']['size'];
            $otherfileerror=$_FILES['otherdoc']['error'];
            $otherfiletype=$_FILES['otherdoc']['type'];
                    
                    $otherfileext=explode('.',$otherfilename);
            $otherfileactualext=strtolower(end($otherfileext));
             $otherfilenamenew=uniqid('',true).".".$otherfileactualext;
                        $otherfiledestination='others/'.$otherfilenamenew;
                         move_uploaded_file($otherfiletmpname,$otherfiledestination);
            
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
                        echo "<script>alert ('your file is too big');</script>";
                      //  header ('location: appointmentview.php');
                    }
                    
                } else
                {
                 echo "<script>alert ('there is an error uploading file');</script>";
                   // header ('location: appointmentview.php');
                }
            }else
            {
              echo "<script>alert ('No file is selected please choose a file with the right extention');</script>";
                //header ('location: appointmentview.php');
            }
            
            
                    
            $firstname=$_POST['fname'];
            $lastname=$_POST['lname'];
            $age=$_POST['age'];
            $Email=$_POST['mail'];
            $phoneno=$_POST['phoneno'];
            $gender=$_POST['gender'];
            $address=$_POST['address'];
           
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
            $improvment=$_POST['improve'];
    
    include "consultationmodel.php";
    $consultationmodel=new consultationmodel($firstname, $lastname,$age,$Email,$phoneno,$gender,$address,$tempreature,$BP,$RR,$spo2,$pulse,$inspection,$palpation,$percussion,$ausculation,$medicaltreat,$diagnoses,$others,$filedestination,$improvment,$otherfiledestination);
            
          
                
                
            }
   