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
require_once("AddNewsInterface.php");
include_once("connection.php");
include_once ("DBHelper.php");

class AddNewsModel extends Model implements AddNewsInterface{

public function ViewNews($Title,$Text){

  $db=new DBHelper();
  $sql="INSERT INTO news(Title,Writing)
   VALUES ('$Title','$Text')";
  $db->connect()->query($sql);


    header("Location:AddNews.php");

}




public function Display(){

  $db=new DBHelper();
    $today = date("d.M.Y/D");
    $sql1 = "SELECT * FROM news";

  // $db->connect()->query($sql1);

  $result = $db->connect()->query($sql1);

  if (mysqli_num_rows($result) > 0) {
    echo '  <section class="section bg-light">
    <div class="container">
       <div class="row">
    ';
    $image = array("img1", "img2", "img3");
    $i=0;

    while($row = mysqli_fetch_assoc($result)){

$text=$row['Writing'];
$title=$row['Title'];
    echo '
            <div class="col-md-4 element-animate" style ="display:inline-block">
              <div class="media d-block media-custom text-left">
                <img src="img/'.$image[$i].'.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">"'.$today.'"</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">"'.$title.'"</a></h3>
                  <p>"'.$text.'"</p>
                  <p class="clearfix">
                  </p>
                </div>
              </div>
            </div>
          ';
          $i++;
    }
  echo'  </div>
  </div>
</section>';
  }

}

}
?>
