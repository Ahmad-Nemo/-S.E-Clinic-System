<?php
ini_set('display_errors',1);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);


//session_start();
include_once ("login.php");

$_SESSION['error']="";
    
if(isset($_POST['Submit']))
{
    
        $username = $_POST['username'];
        $password = $_POST['upassword'];
       $_SESSION['username']=$username;
        $_SESSION['Password']=$password;
    
    
    $login=new login($username,$password);
    
    
    if($login)
    {
        
     
    
       
            if($_SESSION["userstatus"]=="pending")
            {
               $_SESSION['error']= "You are not approved yet"; 
                header("Location:loginview.php");
            }
            else if($_SESSION["userstatus"]=="Declined")
            {
                
                $_SESSION['error']= "sorry you  are declined, please contact us for further information";
                 header("Location:loginview.php");
            }
            else if ($_SESSION["userstatus"]=="Approved")
            {
                
               // var_dump("byyyd");
              
               
                if($_SESSION["usertype"] == 3)
                { 
                  $_SESSION['Adminloggedin'] = true;
                 header("Location:Homeadmin.php");
                    
                }
                else if($_SESSION["usertype"] == 1)
                {
                   var_dump("byyyd");
                    $_SESSION["doctorlogin"]=true;
                    header("Location:Homedoc.php");
                }
                else if($_SESSION["usertype"] == 2)
                {
                    $_SESSION["secertairylogin"]=true;
                    header("Location:SecertairyHome.php");
                } 
            }  
	    }
        
        
    else
    {
       $_SESSION['error']="Invalid username or Password";
         header("Location:loginview.php");
    }
    
    
}



if (isset($_POST['register']))
{
       $data['fname']=$_POST['fname'];
       $data['lname']=$_POST['lname'];
       $data['mail']=$_POST['mail'];
       $data['password']=$_POST['password'];
       $data['phone']=$_POST['phone'];
       $data['date']=$_POST['date'];
       $data['gender']=$_POST['gender'];
    
        include_once ("Register.php");
    $Register=new Register($data);
    
    if($Register)
    {
        echo "<script>alert ('Data Registered succesfully');</script>";
        header("Location:loginview.php");
    }else
    {
            echo "<script>alert ('There is an Error Adding data');</script>";
         header("Location:Registerview.php");
    
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}








?>