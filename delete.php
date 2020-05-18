<?php
include "DBHelper.php";
      $db=new DBHelper();
$conn=$db->connect();
$sql=" Delete From users where id='$_GET[id]'";

if( mysqli_query($conn,$sql))
header("refresh:1; url=DeleteDoctor.php");
    ?>