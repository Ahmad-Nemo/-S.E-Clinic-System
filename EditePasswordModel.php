<?php

require_once("Model.php");
class EditePasswordModel extends Model {

      function savePass($Pass1, $Pass2)
      {
            $db=new DBHelper(); 
            $sql=" Update  users set `Password` = '$Pass2' WHERE ID=19 ";

            $db->connect()->query($sql);
           /* $result2 = $db->connect()->query("SELECT  FROM users WHERE password = '$Pass1'");
            if ($result2 && mysqli_num_rows($result2) > 0) {
          
}   */
}
 

}

?>