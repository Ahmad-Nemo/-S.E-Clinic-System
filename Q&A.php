<html>
<head>
    <title> Q and  A Manage</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   
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
     else if($_SESSION["usertype"]== 2)
     {
        
         include "secretairy.php";
         
     }
    
    
    include_once 'connection.php';
    

    ?>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Q/A ID</th>
      <th scope="col">Question</th>
      <th scope="col">Answer</th>
      <th scope="col">Handle</th>
      <th scope="col">
      <button type="button" class="btn btn-primary" onclick='goBack()'>ADD Question</button>
      <script>
          function goBack() {
            window.location.href="addquestion.php";
          }
          </script>
      </th>
    </tr>
  </thead>
  

<?php
        
          
          $sql = "select * from qa";

          
          $result = mysqli_query($conn,$sql);

          if(mysqli_num_rows($result) > 0){
            $num =1;
            while($row = mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td>".$num."</td>";
              echo "<td>".$row["qa_id"]."</td>";
              echo "<td>".$row["question"]."</td>";
              echo "<td>".$row["answer"]."</td>";
              $valueid = $row['qa_id'];
              echo "<td><a href='QAeditview.php?setid=$valueid' name ='details'>Edit</a></td>";
                echo "<td> <a style='color:red;' href=DeleteQ&A.php?setid=$valueid>Delete</a> </td> ";
              
                
    
              $num++;
            }
          }
          else{
            echo "<tr>";
            echo "<td><h2>No Data to Show</h2></td>";
            echo "</tr>";
          }
        ?>
    </table>
</body>

</html>