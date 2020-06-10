<html>
<head>
    <title> Q and  A Manage</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link rel="stylesheet" href="style.css">
         <script src="https://kit.fontawesome.com/fd397b4a5e.js" crossorigin="anonymous"></script>
        
   <style>

    
    
    </style>
    </head>

<body>

<?php
    ini_set('display_errors',1);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);
    
    
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
     else if($_SESSION["usertype"] == 2)
     {
         include "secretairy.php";
         
     }
    
    
    include_once 'connection.php';
    

    ?>
<form action="" method="post">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col"> ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Appointment Type</th>  
      <th scope="col">Handle</th>
      <th scope="col">
      <button type="button" class="btn btn-primary" onclick='goBack()'>ADD Appointment</button>
           <button type="button" class="btn btn-primary" onclick='goto()'>ADD Consultation</button>
         
      <th scope="col"> <input type="text" onkeyup="search()">
         
      <script>
          function goBack() {
            window.location.href="appointmetview.php";
          }
          function goto()
          {
              window.location.href="consultationview.php";
          }
          $(document).ready(function() {
   $('.mdb-select').materialSelect();
    }     );
          </script>
      </th>
        <th scope="col"><div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      view
    </button>
    <div class="dropdown-menu">
        
      <button class="dropdown-item"  name="all"  selected >All</button>
      <button class="dropdown-item" name="appointment">Appointments</button>
      <button class="dropdown-item" name="consultation" >Consultation</button>
    </div>
  </div></th>
    </tr>
  </thead>
  
<div id="Q/A">
<?php
        
          
          $sql = "select * from filling";
          $sql2="select * from filling where appointmenttype='Appointment'";
          $sql3="select * from filling where appointmenttype='Consultation'";
          $result = mysqli_query($conn,$sql);
    $result1 = mysqli_query($conn,$sql2);
    $result2= mysqli_query($conn,$sql3);

        
    
    if(isset($_POST["appointment"]))
    {
        
        if(mysqli_num_rows($result1) > 0){
            $num =1;
            while($row = mysqli_fetch_assoc($result1)){
              echo "<tr>";
              echo "<td>".$num."</td>";
              echo "<td>".$row["ID"]."</td>";
              echo "<td>".$row["FirstName"]."</td>";
              echo "<td>".$row["LastName"]."</td>";
              echo "<td>".$row["appointmenttype"]."</td>";
                
              $valueid = $row['ID'];
              echo "<td><a href='editfile.php?setid=$valueid' name ='details'>Edit</a></td>";
                echo "<td> <a style='color:red;' href=Deletefile.php?setid=$valueid>Delete</a> </td> ";
              
                
    
              $num++;
            }
          }
          else{
            echo "<tr>";
            echo "<td><h2>No Data to Show</h2></td>";
            echo "</tr>";
          }
    }else if(isset($_POST["consultation"]))
    {
        if(mysqli_num_rows($result2) > 0){
            $num =1;
            while($row = mysqli_fetch_assoc($result2)){
              echo "<tr>";
              echo "<td>".$num."</td>";
              echo "<td>".$row["ID"]."</td>";
              echo "<td>".$row["FirstName"]."</td>";
              echo "<td>".$row["LastName"]."</td>";
              echo "<td>".$row["appointmenttype"]."</td>";
                
              $valueid = $row['ID'];
              echo "<td><a href='editfile.php?setid=$valueid' name ='details'>Edit</a></td>";
                echo "<td> <a style='color:red;' href=Deletefile.php?setid=$valueid>Delete</a> </td> ";
              
                
    
              $num++;
            }
          }
          else{
            echo "<tr>";
            echo "<td><h2>No Data to Show</h2></td>";
            echo "</tr>";
          }
    }else if(isset($_POST["all"]))
    {
        
        if(mysqli_num_rows($result) > 0){
            $num =1;
            while($row = mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td>".$num."</td>";
              echo "<td>".$row["ID"]."</td>";
              echo "<td>".$row["FirstName"]."</td>";
              echo "<td>".$row["LastName"]."</td>";
              echo "<td>".$row["appointmenttype"]."</td>";
                
              $valueid = $row['ID'];
              echo "<td><a href='editfile.php?setid=$valueid' name ='details'>Edit</a></td>";
                echo "<td> <a style='color:red;' href=Deletefile.php?setid=$valueid>Delete</a> </td> ";
              
                
    
              $num++;
            }
          }
          else{
            echo "<tr>";
            echo "<td><h2>No Data to Show</h2></td>";
            echo "</tr>";
          }
        
    }
    
    
    
        ?>
    </div>
    </table>
    </form>
    <script>


     function search(){
        var valuex = document.getElementById("usearch").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("Q/A").innerHTML=this.response;
                interaction();
            }
            };
              xmlhttp.open("GET", "updatefile.php?code=" + valuex, true);
              xmlhttp.send();
        
    }
   
   
</script>
</body>

</html>