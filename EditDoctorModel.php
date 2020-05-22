<?php

ini_set('display_errors',0);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);

?>

<?php

require_once("model.php");
include_once ("connection.php");
include_once ("DBHelper.php");

class EditDoctorModel extends Model{

public function insert($ID,$Status,$firstname,$lastname,
 $email,$password,$phoneno,$DOB,$gender){




$dbcon = new dbconnect();
$conn = $dbcon->connect();

//
// $sql="SELECT * FROM users WHERE (TypeID='1' OR TypeID= '3')";
//  $result = mysqli_query($conn,$sql);
//  if (mysqli_num_rows($result) > 0) {
//  echo "<table class='table table-striped table-bordered' >";
//  echo "<th>Doctor ID</th>"."<th>Status</th>"."<th>First Name</th>"."<th>Last Name</th>"."<th>Email</th>".
//  "<th>Password</th>"."<th>Phone Number</th>"."<th>DOB</th>"."<th>Gender</th>";
//
//     while($row = mysqli_fetch_array($result)) {
//     echo "<tr><td>".$row['ID']."</td>".
//     "<td>".$row['status']."</td>".
//     "<td>".$row['FirstName']."</td>".
//      "<td>".$row['LastName']."</td>".
//       "<td>".$row['Email']."</td>".
//        "<td>".$row['Password']."</td>".
//         "<td>".$row['Phoneno']."</td>".
//          "<td>".$row['DOB']."</td>".
//           "<td>".$row['gender']."</td></tr>";
// }
//     echo "</table>";
//  }
//  else {
//     echo "<h4>No Doctor Info yet</h4>";
//  }
      #$ID,$Status,$firstname,$lastname, $email,$password,$phoneno,$DOB,$gender
      $name3 = date('Y/m/d', strtotime($DOB));

      $sql2="UPDATE users SET status='$Status',FirstName='$firstname',LastName='$lastname',
      Email='$email',Password='$password',
			Phoneno='$phoneno',DOB='$name3',gender='$gender' WHERE ID='$ID'";

      $result2=mysqli_query($conn,$sql2);

      var_dump($result2);
      /*
      $mysqli= NEW MySQLi ('localhost','root','','clinic3');
         $resultSet = $mysqli->query("select Email from users where  Email='$email'");

            if (mysqli_num_rows($resultSet) > 0) {

            // output data of each row
            $row = mysqli_fetch_assoc($resultSet);
            if('$Email'==$row['Email'])
            {
                echo"Email Already exist";
			  //  return FALSE;
              return FALSE;
            }
        }else { //here you need to add else condition


			if($result2)
			{
				header("Location:EditDoctor.php");
			}

            echo "<script src='jquery-3.4.1.min.js'></script>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
            <script type='text/javascript'>





               Swal.fire({
                 position: 'top-end',
                 icon: 'success',
                 title: 'Your work has been saved',
                 showConfirmButton: false,
                 timer: 1500;
        });

            </script>";
                    return TRUE;

        }*/




}

}
?>
