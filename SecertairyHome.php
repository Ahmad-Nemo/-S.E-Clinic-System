<html>


    <head>
        <?php
        ini_set('display_errors',1);
ini_set('track_errors',1);
ini_set('display_startup_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(-1);
error_reporting(E_ALL | E_STRICT);
        
include_once "login.php";
if(!isset($_SESSION['usertype']))
{
   header("Location:index.php");

 }
?>
        <title>Dr Hisham medical center</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">
    
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
    
        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <style>
        
    
          
           .logo
       {
        width: 100px;
        height: 100px;
          
           
       } 
          </style>
    
    
        <!-- Theme Style -->
        <link rel="stylesheet" href="css/style.css">
      </head>



<body>
   
     
    <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-5">
                <ul class="social list-unstyled">
                  <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-6 col-7 text-right">
                <p class="mb-0">
                   <label style=" color: white;"> Welcome Doctor </label>
                    <?php if(isset($_SESSION['username']))
{
    echo $_SESSION['username'];
}
                    
                    ?>
                  </p>
                  
              </div>
            </div>
          </div>
        </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo2.jpeg" ></a>
          <div class="container">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarsExample05">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="SecertairyHome.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ApproveRegistrationView.php">Approve Reservations</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="viewfiles.php">View Files</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">SignOut</a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

   
      <!-- END header -->
      
      <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('img/manage1.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center">
              <div class="col-md-7 col-sm-12 element-animate">
                <h1>Welcome HR here you can manage all your work </h1>
                
              </div>
            </div>
          </div>
  
        </div>
  
        <div class="slider-item" style="background-image: url('img/ans1.png');">
          <div class="container">
            <div class="row slider-text align-items-center">
              <div class="col-md-7 col-sm-12 element-animate">
                <h1>You can see files and manage them </h1>
                
              </div>
            </div>
          </div>
           </div>
  
          <div class="slider-item" style="background-image: url('img/files1.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center">
              <div class="col-md-7 col-sm-12 element-animate">
                <h1>You can manage patients data Appointments and consultations </h1>
                
              </div>
            </div>
          </div>
          
        </div>
         
      </section>
      <!-- END slider -->
  
  
      <!-- END section -->
  
      
      <!-- END section -->
  
      <!-- END section -->
  
      
      <!-- END slider -->
         
      <!-- END section -->
  
     
      <!-- END section -->
  
     
            <!-- END slider -->
         
      <!-- END section -->
  
      
      <!-- END cta-link -->
  
      
      <!-- END footer -->
  
  
      <!-- Modal -->
      <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#">
                <div class="form-group">
                  <label for="appointment_name" class="text-black">Full Name</label>
                  <input type="text" class="form-control" id="appointment_name">
                </div>
                <div class="form-group">
                  <label for="appointment_email" class="text-black">Email</label>
                  <input type="text" class="form-control" id="appointment_email">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="appointment_date" class="text-black">Date</label>
                      <input type="text" class="form-control" id="appointment_date">
                    </div>    
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="appointment_time" class="text-black">Time</label>
                      <input type="text" class="form-control" id="appointment_time">
                    </div>
                  </div>
                </div>
                <br>
                  <label for="exampleFormControlInput1">Phone No.</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" >
                  <br>
                <label for="cars">Choose a doctor:</label>
  
  <select id="cars">
    <option value="volvo">Dr. Hisham Mortada</option>
    <option value="saab">Dr. Basel Bahaa</option>
    <option value="mercedes">Dr. Shaymaa Abo EL Dahab</option>
      <option value="audi">Dr.Shaymaaa Wageeh</option>
      <option value="audi">Dr.Marwa Mekawy</option>
      <option value="audi">Dr.Iman Hassan</option>
      <option value="audi">Dr.Safaa Hassan</option>
  </select>
                  <br>
  
                <div class="form-group">
                  <label for="appointment_message" class="text-black">Message</label>
                  <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
  
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/jquery.timepicker.min.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/main.js"></script>
    </body>

    

</html>