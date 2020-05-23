

  
    <head>
        <?php   
        include_once "login.php";
        if(!isset($_SESSION['usertype']))
   {
      header("Location:index.php");

    }
   
        ?>
        
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
               <label style="color=white;"> Wellcome Doctor ....</label>
                    <?php
                    if(isset($_SESSION["username"]))
                    {
                        echo $_SESSION["username"];
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
                  <a class="nav-link active" href="Homedoc.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Doctor`sTableView.php">Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewfiles.php">patient file</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Q&A.php">Q/A</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">SignOut</a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>


    
</body>

    
