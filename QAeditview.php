<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/animate.css">
<title>Manage account</title>

<?php
session_start();
   if(!isset($_SESSION["managserlogin"]))
   {
      
   }

    $qaid = $_GET['setid'];
?>



</head>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/animate.css">

<body>
<?php include "header.php"; ?>


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Data type</th>
      <th scope="col">Data</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody><?php
    
        include "connection.php";

        $sql ="select * from qa where qa_id=$qaid";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<td>Q&A ID</td>";
            echo "<td>".$row['qa_id']."</td>";
            echo "</tr>";
            echo "<tr>";
           
           
            echo "</tr>";
            echo "<tr>";
            echo "<td>Question</td>";
            echo "<td>
            <form method='POST' action='QAeditcontroller.php?setid=$qaid'>
            <div class='form-group'>

            <label for='comment'></label>

            <textarea name='text1' class='form-control' rows='5' id='comment1'>".$row['question']."</textarea>
          </div>
            </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Answer</td>";
            echo "<td><div class='form-group'>
            <label for='comment'></label>
            <textarea name='text2' class='form-control' rows='5' id='comment'>".$row['answer']."</textarea>
        
          </div>
          <div style = 'text-align:center;'>
          <button id = 'update 'name='update' id='edit' type='submit' class='btn btn-success' >Edit</button>
          <button type='button' class='btn btn-secondary' onclick='goBack()'>Cancel</button>
          <script>
          function goBack() {
            window.location.href='Q&A.php';
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
    </tbody>
    </table>
    
    </body>
</html>
