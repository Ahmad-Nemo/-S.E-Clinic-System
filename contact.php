<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Medi+</title>
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
    
   <?php include ("header.php");?>
    <!-- END header -->
    
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Contact Us</h1>
              <p>You can make a reservation using the reservation form or contact us from the numbers below.</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 element-animate">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname" >First Name</label>
                  <input type="text" name="fname" class="form-control form-control-lg" id="fname">
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname" >Last Name</label>
                  <input type="text" name="lname" class="form-control form-control-lg" id="lname">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email" >Email</label>
                  <input type="email" id="email" name="mail" class="form-control form-control-lg">
                </div>
              </div>
                <br>
                  
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="comment" id="message" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" name="Submit" value="Send Private Comment" class="btn btn-primary btn-lg btn-block">
                </div>

              </div>
            </form>
              <?php
              include "connection.php";
              
              if(isset($_POST['Submit']))
              {
                  
              $firstname=$_POST["fname"];
              $lastname=$_POST["lname"];
              $email=$_POST["mail"];
              $comment=$_POST["comment"];
              $date=date("d/m/y");
              $time=date("h:i:s"); 
                  $sql="INSERT INTO `commenting`(`FirstName`, `LastName`,`Email`, `comment`, `date`, `time`) VALUES ('$firstname','$lastname','$email','$comment','$date','$time') ";
                  $result=mysqli_query($conn,$sql);
                  if ($result)   
                {
                      echo "<script>
                      alert('Comment Sent');
                        </script>";
                }
                  else {
                      echo mysqli_error($conn);
                        }
             
              }
              
              
              ?>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 element-animate">
            
            <h5 class="text-uppercase mb-3">Address</h5>
            <p class="mb-5">El matria square bit el ezz towers 2, <br> tower A <br> 3rd floor app no 301</p>
            
            <h5 class="text-uppercase mb-3">Email Us At</h5>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">mortada_hisham23@yahoo.com</a> <br> </p>
            
            <h5 class="text-uppercase mb-3">Call Us</h5>
            <p class="mb-5"> <br> Mobile: 01023078804 <br> Mobile 2: 01127222712</p>
  

          </div>
        </div>
      </div>
    </section>

    

    <a href="resview.php" class="cta-link element-animate" data-aniamte-effect="fadeIn">
      <span class="sub-heading">Ready to Visit?</span>
      <span class="heading">Make an Appointment</span>
    </a>
    <!-- END cta-link -->

    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5 element-animate">
          <div class="col-md-3 mb-5">
            <h3>Services</h3>
            <ul class="footer-link list-unstyled">
              <li><a href="doctors.html">Find a doctor</a></li>
              
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Latest News</h3>
            <ul class="footer-link list-unstyled">
              <li><a href="news.html">News &amp; Press Releases</a></li>
             
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>About</h3>
            <ul class="footer-link list-unstyled">
              <li><a href="about.php">About the Medical care center</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Location &amp; Contact</h3>
            <p class="mb-5">El matria square bit el ezz towers 2 tower A 3rd floor app no 301 </p>

            <h4 class="text-uppercase mb-3 h6 text-white">Email</h4>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">mortada_hisham23@yahoo.com</a></p>
            
            <h4 class="text-uppercase mb-3 h6 text-white">Phone</h4>
            <p>01023078804</p>
            <p>01127222712</p>

          </div>
        </div>

        <div class="row pt-md-3 element-animate">
          <div class="col-md-12">
            <hr class="border-t">
          </div>
          <div class="col-md-6 col-sm-12 copyright">
            <p>&copy; 2018 Colorlib Medi+. Designed &amp; Developed by <a href="https://colorlib.com/">Colorlib</a></p>
          </div>
          <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
            <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
            <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
            <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </footer>
      <!-- END Footer -->


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