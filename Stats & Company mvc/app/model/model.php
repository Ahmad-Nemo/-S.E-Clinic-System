<?php
session_start();
include_once ("../app/db/connection.php");
include_once("../app/db/DBHelper.php");

abstract class Model{
    protected $db;
    protected $conn;

    public function connect(){
        if(null === $this->conn ){
            $this->db = new Dbh();
        }
        return $this->db;
    }
}
?>
