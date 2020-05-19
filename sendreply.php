<html>
<head>
    <title> Comments</title>
</head>

<body>

<?php
     include "Admin.php";
    
   
   
    include_once 'connection.php';
    

    ?>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">First name</th>
      <th scope="col">last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Comment</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Reply</th>
      <th scope="col">Handle</th>
      <th scope="col">
      
      </th>
    </tr>
  </thead>
  

<?php
        
          
          $sql = "SELECT `comment_id`, `FirstName`, `LastName`, `Email`, `comment`, `date`, `time` FROM `commenting`";

          
          $result = mysqli_query($conn,$sql);

          if(mysqli_num_rows($result) > 0){
            $num =1;
            while($row = mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td>".$num."</td>";
              echo "<td>".$row["comment_id"]."</td>";
              echo "<td>".$row["FirstName"]."</td>";
              echo "<td>".$row["LastName"]."</td>";
                echo "<td>".$row["Email"]."</td>";
                 echo "<td>".$row["comment"]."</td>";
                 echo "<td>".$row["date"]."</td>";
                 echo "<td>".$row["time"]."</td>";
                
              $valueid = $row['comment_id'];
              echo "<td><a href='reply.php?setid=$valueid' name ='details'>Reply</a></td>";
                echo "<td> <a style='color:red;' href=Deleteomment.php?setid=$valueid>Delete</a> </td> ";
              
                
    
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