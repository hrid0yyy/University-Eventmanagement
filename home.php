<?php
$date = date('Y-m-d');


?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Event Administration System</title>
  <?php require 'utils/styles.php'; ?>
  <?php require 'utils/scripts.php'; ?>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">

  
</head>

<body>

  
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Event Administration System</a></h1>
        
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li class="menu-active"><a href="#intro">Home</a></li>     
        <li class="menu-has-`children"><a href="viewpoll.php">Polls</a>
        <li class="menu-has-`children"><a href="#">Events</a>
            <ul>
              <li><a href="#events">Upcoming Events</a></li>
              <li><a href="prevevents.php">Previous Events</a></li>
            </ul>
          </li>
          <!-- <li><a href="#about">About Us</a></li> -->
          <li class="menu-has-`children"><a href="#">Login</a>
            <ul>
              <li><a href="adminlogin.php">Admin</a></li>
              <li><a href="organizerlogin.php">Organizer</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
	
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/campus.jpg" style="height:100%; width:100%;"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>United International University</h2>
                <p>United International University (UIU) is the outcome of the initiative taken by a couple of renowned academicians.</p>
                <a href="organizerlogin.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/Class.jpg" style="height:100%; width:100%;"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Classroom</h2>
                <p></p>
                <a href="organizerlogin.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/Field.jpg" style="height:100%; width:100%;"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Field</h2>
                <p></p>
                <a href="organizerlogin.php" class="btn-get-started scrollto" >Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/Hall.jpg" style="height:100%; width:100%;"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>UIU Multipurpose Hall</h2>
                <p></p>
                <a href="organizerlogin.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/Lab.jpg" style="height:100%; width:100%;"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Computer Lab</h2>
                <p>Here you can host many competitive contests or any workshop</p>
                <a href="organizerlogin.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><br> <br>
	<section id="events">
  
  <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12" style="text-align: center;"><!--body content title holder with 12 grid columns-->
                    <h1>What's On</h1><!--body content title-->
                </div>
            </div>
			
            
	<?php
    //storing database details in variables.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eventadministration";
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    //checking if connection is working or not
    //Output Form Entries from the Database
    $sql = "((SELECT events.EventID,EventName,ShortDescription,EventFileBanner,EventDate 
    FROM events join request_ on events.EventID=request_.EventID 
    join slot on request_.SlotID=slot.SlotID 
    where accept=1 and EventDate>CURDATE())
     
     UNION
    
    (SELECT events.EventID,EventName,ShortDescription,EventFileBanner,EventDate 
    FROM events join outsiderequest on events.EventID=outsiderequest.EventID 
    where accept=1 and EventDate>CURDATE()))";
    //fire query
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_assoc($result)){
        echo'<div class="container">
        <div class="col-md-12">
        <hr>
        </div>
        </div> 
          <div class="row"><!--event content-->
           <section>
               <div class="container">
                   <div class="column">
                  
                       <span class="day"><h3>&nbsp;&nbsp;'. date('j F, y',strtotime($row['EventDate'])) .'</h3></span>
                   </div>
                   <div class="col-md-5"><!--image holder with 5 grid column-->
                   <img src="./image/'. $row["EventFileBanner"] .'" width="350px" height="250px">
                   </div>
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                   <div class="col-md-6">
                       <h1 class="title">'. $row["EventName"] .'</h1>
                       <p class="location">
                      
                       </p>
                       <h5 class="definition">'. $row["ShortDescription"] .'</h5>
                       
                       <a href="details.php?eid='. $row['EventID'] .'">View Details</a>
                    
                      
                   </div>
               </div>
           
       </div> ';

      }




       }

    else
    {
        echo "No Upcoming Events inside UIU";
    }
    // closing connection
    mysqli_close($conn);

?>
</section>


	
	
	

  <main id="main">

 
	  
	  
 
	  
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p> For Any kind of information or any type of help you need, Then Contact Us Bellow.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>United City, Madani Avenue,  Badda</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p>+880 1829604542</p>
			  <p>+880 1793268944</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="https://www.gmail.com">sahmed221068@bscse.uiu.ac.bd </a></p>
			  <p><a href="https://www.gmail.com">sahmed221241@bscse.uiu.ac.bd</a></p>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 footer-info">
            <h3>Event Administration System</h3>
            <p>This Is A Website to manage Events of United International University(UIU).</p>
          </div>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <div class="col-lg-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              
            </ul>
          </div>
  
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
            United City, Madani Avenue,  Badda <br>
            Dhaka 1212, <br>
            Bangladesh.<br>
              <strong>Phone:</strong> 01829604542 <br>
              <strong>Email:</strong> sahmed221068@bscse.uiu.ac.bd <br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Event Administration System</strong>. All Rights Reserved
		</div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
