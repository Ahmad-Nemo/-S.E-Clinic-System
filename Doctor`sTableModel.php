<?php

require_once("Model.php");
class ModelTable extends Model {

    

    private $ReservationsWeekly;
    private $ReservationsToday;

    function getReservationsWeekly()
    {
        return $this->ReservationsWeekly;
    }    

function getReservationsToday()
{
    return $this->ReservationsToday;
}
    function readresToday(){
        $db=new DBHelper(); 
        $sql=("SELECT * FROM reservation WHERE current_date = datapp");
        $this->ReservationsToday=$db->connect()->query($sql);
        
      }


      function ReadReservationsWeekly(){
       
        $db=new DBHelper(); 
        $sql=("SELECT * from reservation  WHERE  EXTRACT(WEEK FROM datapp) AS week  ");
        var_dump($sql);
        $this->ReservationsWeekly=$db->connect()->query($sql);
       
      }


     
      







}

?>