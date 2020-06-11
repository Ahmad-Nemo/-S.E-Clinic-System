<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/animate.css">
<title>Manage account</title>

<?php
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

    $qaid = $_GET['setid'];
?>



</head>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/animate.css">

<body>



<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Data type</th>
      <th scope="col">Data</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <?php
    
        include "connection.php";

        $sql ="select * from filling where ID=$qaid";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<td>Q&A ID</td>";
            echo "<td>".$row['ID']."</td>";
            echo "</tr>";
            echo "<tr>";
           
           
            echo "</tr>";
            echo "<tr>";
            echo "<td>First Name</td>";
            echo "<td>
            <form method='POST' action=''>
            <div class='form-group'>

            <label for='comment'></label>

            <textarea name='text1' class='form-control' rows='5' id='comment1'>".$row['FirstName']."</textarea>
          </div>
            </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Last Name</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text2' class='form-control' rows='5' id='comment'>".$row['LastName']."</textarea>";
             echo "</tr>";
             echo "<tr>";
             echo "<td>Age</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text3' class='form-control' rows='5' id='comment'>".$row['age']."</textarea>";
            echo "</tr>";
             echo "<tr>";
             echo "<td>Email</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text4' class='form-control' rows='5' id='comment'>".$row['Email']."</textarea>";
             echo "</tr>";
             echo "<tr>";
             echo "<td>Email</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text26' class='form-control' rows='5' id='comment'>".$row['phoneno']."</textarea>";
            echo "</tr>";
            echo "</tr>";
             echo "<tr>";
             echo "<td>Appointment type</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text5' class='form-control' rows='5' id='comment'>".$row['appointmenttype']."</textarea>";
            echo "</tr>";
             echo "<tr>";
             echo "<td>Gender</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text6' class='form-control' rows='5' id='comment'>".$row['gender']."</textarea>";     //`ID`, `FirstName`, `LastName`, `age`, `Email`, `phoneno`, `gender`, `address`, `appointmenttype`,                                                                                                  `pasthistory`, `smoking`, `investigation`, `pastmedicaltt`, `tempreature`, `BP`, `RR`, `SpO2`, `pulse`, `inspection`, `palpation`, `percussion`,                                                                                                `auscultation`, `medicalttt`, `diagnosis`, `improvement`, `noofcigarettes`, `duration`, `others`, `otherdoc`, `Xray`      
            echo "</tr>";
             echo "<tr>";
             echo "<td>Past history</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text7' class='form-control' rows='5' id='comment'>".$row['pasthistory']."</textarea>";
            echo "</tr>";
             echo "<tr>";
             echo "<td>Smoking</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text8' class='form-control' rows='5' id='comment'>".$row['smoking']."</textarea>";
            echo "</tr>";
             echo "<tr>";
             echo "<td>No of cigaretes</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text9' class='form-control' rows='5' id='comment'>".$row['noofcigarettes']."</textarea>";
                        echo "</tr>";
             echo "<tr>";
             echo "<td>duration</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text10' class='form-control' rows='5' id='comment'>".$row['duration']."</textarea>";
                        echo "</tr>";
             echo "<tr>";
             echo "<td>investigation</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text11' class='form-control' rows='5' id='comment'>".$row['investigation']."</textarea>";
                        echo "</tr>";
             echo "<tr>";
             echo "<td>First Name</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text12' class='form-control' rows='5' id='comment'>".$row['pastmedicaltt']."</textarea>";
             echo "</tr>";
            echo "<tr>";
             echo "<td>tempreature</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text13' class='form-control' rows='5' id='comment'>".$row['tempreature']."</textarea>";
             echo "</tr>";
            echo "<tr>";
             echo "<td>Blood Preasure</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text14' class='form-control' rows='5' id='comment'>".$row['BP']."</textarea>";
             echo "</tr>";
            echo "<tr>";
             echo "<td>Respiratory Rate</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text15' class='form-control' rows='5' id='comment'>".$row['RR']."</textarea>";
             echo "</tr>";
            echo "<tr>";
             echo "<td>SpO2</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text16' class='form-control' rows='5' id='comment'>".$row['SpO2']."</textarea>";
             echo "</tr>";
            echo "<tr>";
             echo "<td>Pulse</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text17' class='form-control' rows='5' id='comment'>".$row['pulse']."</textarea>";
             echo "</tr>";
            echo "<tr>";
             echo "<td>Inspection</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text18' class='form-control' rows='5' id='comment'>".$row['inspection']."</textarea>";
             echo "</tr>";
              echo "<tr>";
             echo "<td>Palpation</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text19' class='form-control' rows='5' id='comment'>".$row['palpation']."</textarea>";
            echo "</tr>";
              echo "<tr>";
             echo "<td>Percussion</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text20' class='form-control' rows='5' id='comment'>".$row['percussion']."</textarea>";
            echo "</tr>";
              echo "<tr>";
             echo "<td>Ausculation</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text21' class='form-control' rows='5' id='comment'>".$row['auscultation']."</textarea>";
            echo "</tr>";
              echo "<tr>";
             echo "<td>Medical Treatment</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text22' class='form-control' rows='5' id='comment'>".$row['medicalttt']."</textarea>";
            echo "</tr>";
              echo "<tr>";
             echo "<td>Diagnoses</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text23' class='form-control' rows='5' id='comment'>".$row['diagnosis']."</textarea>";
            echo "</tr>";
              echo "<tr>";
             echo "<td>Improvment</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text24' class='form-control' rows='5' id='comment'>".$row['improvement']."</textarea>";
            echo "</tr>";
             echo "<tr>";
             echo "<td>Others</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text25' class='form-control' rows='5' id='comment'>".$row['others']."</textarea>";
            echo "</tr>";
             echo "<tr>";
             echo "<td>Xrays</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <img src=".$row['Xray']." height='300' width='300'>
            ";
            echo "</tr>";
             echo "<tr>";
             echo "<td>Other Documents</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <img src=".$row['otherdoc']." height='300' width='300'>
            ";
        
         echo "</div>
          <div style = 'text-align:center;'>
          <button id = 'update 'name='update' id='edit' type='submit' class='btn btn-success' >Edit</button>
          <button type='button' class='btn btn-secondary' onclick='goBack()'>Cancel</button>
          <script>
          function goBack() {
            window.location.href='viewfiles.php';
          }
          </script>
          </div>
            </td>
            </tr>
            
            </form>";

        }
        
        else{
        echo "No Data to Show";
        }
    ?>
    <?php
if(isset($_POST["update"]))
{ 
    $idqa = $row['ID'];
    $fnmae= $_POST['text1'];
    $lname = $_POST['text2'];
     $age = $_POST['text3'];
    $mail= $_POST['text4'];
    $phoneno=$_POST['text26'];
     $apptype = $_POST['text5'];
    $gender= $_POST['text6'];
     $pasthist= $_POST['text7'];
    $smoking= $_POST['text8'];
     $noofcig = $_POST['text9'];
    $duration= $_POST['text10'];
     $invest= $_POST['text11'];
    $pastmed= $_POST['text12'];
     $temp= $_POST['text13'];
    $BP= $_POST['text14'];
     $RR = $_POST['text15'];
    $spo2 = $_POST['text16'];
     $pulse = $_POST['text17'];
    $inspect= $_POST['text18'];
     $palpation= $_POST['text19'];
    $percustion= $_POST['text20'];
     $ausc= $_POST['text21'];
    $medttt= $_POST['text22'];
     $diagnose= $_POST['text23'];
    $improve= $_POST['text24'];
    $other= $_POST['text25'];


    
   
    $sql="UPDATE `filling` SET `FirstName`='$fnmae',`LastName`='$lname',`age`='$age',`Email`='$mail',`phoneno`='$phoneno',`gender`='$gender',`appointmenttype`='$apptype',`pasthistory`='$pasthist',`smoking`='$smoking',`investigation`='$invest',`pastmedicaltt`='$pastmed',`tempreature`='$temp',`BP`='$BP',`RR`='$RR',`SpO2`='$spo2',`pulse`='$pulse',`inspection`='$inspect',`palpation`='$palpation',`percussion`='$percustion',`auscultation`=' $ausc',`medicalttt`= '$medttt',`diagnosis`= '$diagnose',`improvement`='$improve',`noofcigarettes`='$noofcig',`duration`='$duration',`others`='$other'  WHERE `filling`.`ID` =$idqa";
    
    
    if (mysqli_query($conn,$sql))   
    {
       echo "<script>
       alert('updated succesfully');
       </script>";
    }
    else {
        echo mysqli_error($conn);
    }
}
?>

  </tbody>
</table>

<br><br>








    

</body>
</html>