<?php

class consultationmodel{
    
    
    
    private $firstname;
    private $age;
    private $Email;
    private $phoneno;
    private $gender;
    private $address;
   
    private $tempreature;
     private $password;
    private $BP;
     private $RR;
    private $spo2;
     private $inspection;
    private $palpation;
     private $percussion;
    private $ausculation;
     private $medicaltreat;
    private $diagnoses;
     private $others;
     private $filedestination;
    private $improvment;
    private $otherfiledestination;


    
    
    //$firstname, $lastname,$age,$Email,$phoneno,$gender,$address,$pasthist,$smoking,$noofpacks,$duration,$investigation,$pasttreat,$tempreature,$BP,$RR,$spo2,$pulse,$inspection,$palpation,$percussion,$ausculation,$medicaltreat,$diagnoses,$others
    
    function __construct($firstname, $lastname,$age,$Email,$phoneno,$gender,$address,$tempreature,$BP,$RR,$spo2,$pulse,$inspection,$palpation,$percussion,$ausculation,$medicaltreat,$diagnoses,$others,$filedestination,$improvment,$otherfiledestination){
        
    
        $this->setdata($firstname, $lastname,$age,$Email,$phoneno,$gender,$address,$tempreature,$BP,$RR,$spo2,$pulse,$inspection,$palpation,$percussion,$ausculation,$medicaltreat,$diagnoses,$others,$filedestination,$improvment,$otherfiledestination);
        
        
        

        
        
        
    }
   private function setdata($firstname, $lastname,$age,$Email,$phoneno,$gender,$address,$tempreature,$BP,$RR,$spo2,$pulse,$inspection,$palpation,$percussion,$ausculation,$medicaltreat,$diagnoses,$others,$filedestination,$improvment,$otherfiledestination)
    {
       include_once "connection.php";
        $this->firstname=$firstname;
        $this->lastname=$lastname;
       $this->age=$age;
        $this->Email=$Email;
       $this->phoneno=$phoneno;
        $this->gender=$gender;
       $this->address=$address;
        
        $this->tempreature=$tempreature;
       $this->BP=$BP;
        $this->RR=$RR;
       $this->spo2=$spo2;
        $this->pulse=$pulse;
      
        $this->inspection=$inspection;
       $this->palpation=$palpation;
        $this->percussion=$percussion;
       $this->ausculation=$ausculation;
        $this->medicaltreat=$medicaltreat;
        $this->diagnoses=$diagnoses;
        $this->others=$others;
        $this->filedestination=$filedestination;
       $this->improvment=$improvment;
       $this->otherfiledestination=$otherfiledestination;
       
       
         $sql3="INSERT INTO `filling`(`FirstName`, `LastName`, `age`, `Email`, `phoneno`, `gender`, `address`,`tempreature`, `BP`, `RR`, `SpO2`, `pulse`, `inspection`, `palpation`, `percussion`, `auscultation`, `medicalttt`, `diagnosis`,`others`,`Xray`,appointmenttype,improvement,otherdoc) VALUES ('$this->firstname','$this->lastname',' $this->age','$this->Email','$this->phoneno','$this->gender','$this->address','$this->tempreature','$this->BP','$this->RR','$this->spo2','$this->pulse','$this->inspection','$this->palpation',' $this->percussion','$this->ausculation','$this->medicaltreat','$this->diagnoses','$this->others','$this->filedestination','Consultation',' $this->improvment','$this->otherfiledestination')";
            $result3=mysqli_query($conn,$sql3);
     //  header ('Location:appointmentview.php');
         if($result3)
            {
               //  echo "<script>alert ('Data added succesfully');</script>";
        //header("Location:appointmentview.php");
    }else
    {
            echo "<script>alert ('There is an Error Adding data');</script>";
        // header("Location:appointmentview.php");
    
    }
        
    }
   
    
}
    ?>