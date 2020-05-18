<html>
<head>
    <head>
        <title>Dr Hisham medical center</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">
    
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
    
        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
        <?php include ("Admin.php");?>
    <style>
        
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
          
           .logo
       {
        width: 100px;
        height: 100px; 
       } 
          </style>
    
    
        <!-- Theme Style -->
        <link rel="stylesheet" href="css/style.css">
      </head>





<body>
   <div class="container">
  
  <h2>Delete Table</h2>
  <div class="table-condensed table-bordered">          
  <table class="table" id="myTable">
    <thead>
      <tr>
       <th></th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>phone</th>
        <th>Date of birth</th>
        <th>delete</th>
</tr>
      <?php
      include_once ("DBHelper.php");
      $db=new DBHelper();
      $conn=$db->connect();
          $sql="Select * from users ";
          $result = mysqli_query($conn,$sql);	
      $sr=1;
      while($row=mysqli_fetch_array($result)){        
        ?>
    <tr>
      <form action=""method="post" >
        <td> <?php echo $sr;?></td>
        <?php echo "<td><a href=image.php?id=".$row[0]."> ".$row[2]." ".$row[3]."  </a> </td>";?> 
        <td> <?php echo $row[4];?></td>
        <td> <?php echo $row[5];?></td>
        <td> <?php echo $row[6];?></td>
        <td> <?php echo $row[7];?></td>
         <?php echo "<td><a href=delete.php?id=".$row[0].">Delete  </a> </td>";?>
        </form>
      </tr>
      <?php $sr++;}
      ?>       
  
  </table>
  </div>
</div>

</body>

</html>

