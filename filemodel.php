<?php
//include_once "login.php";
    

class filemodel{
    
    
    private $ID;
    private $Medicalid;
    private $Companyid;
    private $firstname;
    private $age;
    private $Email;
    private $phoneno;
    private $gender;
    private $address;
    private $pasthist;
    private $smoking;
    private $noofpacks;
    private $duration;
    private $investigation;
    private $pasttreat;
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


    
    
    //$firstname, $lastname,$age,$Email,$phoneno,$gender,$address,$pasthist,$smoking,$noofpacks,$duration,$investigation,$pasttreat,$tempreature,$BP,$RR,$spo2,$pulse,$inspection,$palpation,$percussion,$ausculation,$medicaltreat,$diagnoses,$others
    
    function __construct($firstname, $lastname,$age,$Email,$phoneno,$gender,$address,$pasthist,$smoking,$noofpacks,$duration,$investigation,$pasttreat,$tempreature,$BP,$RR,$spo2,$pulse,$inspection,$palpation,$percussion,$ausculation,$medicaltreat,$diagnoses,$others,$filedestination){
        
    
        $this->setdata($firstname, $lastname,$age,$Email,$phoneno,$gender,$address,$pasthist,$smoking,$noofpacks,$duration,$investigation,$pasttreat,$tempreature,$BP,$RR,$spo2,$pulse,$inspection,$palpation,$percussion,$ausculation,$medicaltreat,$diagnoses,$others,$filedestination);
        
        
        

        
        
        
    }
   private function setdata($firstname, $lastname,$age,$Email,$phoneno,$gender,$address,$pasthist,$smoking,$noofpacks,$duration,$investigation,$pasttreat,$tempreature,$BP,$RR,$spo2,$pulse,$inspection,$palpation,$percussion,$ausculation,$medicaltreat,$diagnoses,$others,$filedestination)
    {
       include "connection.php";
        $this->firstname=$firstname;
        $this->lastname=$lastname;
       $this->age=$age;
        $this->Email=$Email;
       $this->phoneno=$phoneno;
        $this->gender=$gender;
       $this->address=$address;
        $this->pasthist=$pasthist;
       $this->smoking=$smoking;
        $this->noofpacks=$noofpacks;
       $this->duration=$duration;
        $this->investigation=$investigation;
       $this->pasttreat=$pasttreat;
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
       $this->ID=$_SESSION["ID"];
       $this->Medicalid=$_SESSION["Medicalid"];
       $this->Companyid=$_SESSION["companyid"];
       
       //ID	FirstName	LastName	age	Email	phoneno	gender	address	appointmenttype	pasthistory	smoking	investigation	pastmedicaltt	tempreature	BP	RR	SpO2	pulse	inspection	palpation	percussion	auscultation	medicalttt	diagnosis	improvement	noofcigarettes	duration	others	otherdoc	Xray	Supported	UserID	MedicalID	CompanyID
       
         $sql2="INSERT INTO `filling` (`FirstName`, `LastName`, `age`, `Email`, `phoneno`, `gender`, `address`, `appointmenttype`, `pasthistory`, `smoking`, `investigation`, `pastmedicaltt`, `tempreature`, `BP`, `RR`, `SpO2`, `pulse`, `inspection`, `palpation`, `percussion`, `auscultation`, `medicalttt`, `diagnosis`,`noofcigarettes`, `duration`, `others`, `Xray`, `UserID`, `MedicalID`, `CompanyID`) VALUES('$this->firstname','$this->lastname',' $this->age','$this->Email',' $this->phoneno','$this->gender',' $this->address','Appointment','$this->pasthist',' $this->smoking','$this->investigation','$this->pasttreat','$this->tempreature','$this->BP','$this->RR','$this->spo2','$this->pulse','$this->inspection','$this->palpation','$this->percussion',' $this->ausculation','$this->medicaltreat','$this->diagnoses','$this->noofpacks','$this->duration',' $this->others','$this->filedestination','$this->ID','$this->Medicalid','$this->Companyid')";
        $result2=mysqli_query($conn,$sql2);
     //  header ('Location:appointmentview.php');
         if($result2)
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