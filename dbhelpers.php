<?php
class Dbhelp {
  
  private static $instance = null;
  private $servername;
  private $dbname;
  private $username;
  private $password;
  
  
  public function connect(){
      $this->servername='localhost';
      $this->username='root';
      $this->password='';
      $this->dbname='clinic3';
      $conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
      
      return $conn;
  
      
      }
  
  
  
  public function selectall($tablename){
         
          $sql="'SELECT * FROM'.$this->tablename";
          $result=$this->connect()->query($sql);
          return $result;
  
  
      }
  
      
     public function CloseCon($conn)
      {
      $conn -> close();
      }
      public function validatename($name){
          if (is_numeric($name)==false && is_null($name)==false && $name=="") {
              $name=stripslashes($name);
              $name=htmlspecialchars($name);
              return $name;
              
          }
          else {
              return false;
              echo'<div class="alert alert-danger">please re enter your data</div>';
          }
  
  
      }
      
      public function requiredcolum($data){
          if (empty($data)) {
              echo "<script> alert(colum required); </script>";
          }
      }
 
  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new Singleton();
    }
 
    return self::$instance;
  }
}
?>