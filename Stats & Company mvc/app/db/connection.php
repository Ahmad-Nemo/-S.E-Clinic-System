<?php
class dbconnect{
        public function connect(){
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'clinic3';
            $connection = mysqli_connect($host,$user,$pass,$db);
            return $connection;
        }
    }
?>
