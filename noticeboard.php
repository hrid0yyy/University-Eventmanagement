<?php
 $delete = false;
session_start();
if(!isset($_SESSION['username'])){
     header("location:noticeboard.php");
    }

?>
<?php
  $oid = $_GET["oid"];
  $eid = $_GET["eid"];
  $time = $_GET["time"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eventadministration";
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT *
    FROM notice join events on notice.EventID=events.EventID
    WHERE notice.EventID =$eid and notice.OrganizerID = $oid and time='$time'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        
        $row = mysqli_fetch_assoc($result);
        

        $ename=$row['EventName'];
        $notice=$row['notice'];
    
     }
    ?>
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>Organizers</title>
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
    <style>
        body{
            background: url("img/black.jpg");
            background-size:cover;
            background-repeat:repeat-y;
            color:white;
        }
        .box{
            background: rgba(0,0,0,0.1);
        }
        .add_employee_form span{
            color:red;
        }
		
		
        p{
            color:red;
        }
		
		.form-control input[type="text"]
		{
			color: blue;
		}
		
		
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px;}
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;background-color:white;}
    </style>
   
</head>
<body> 
	<br><br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Organizers</a></h1>
      </div>
		
      <?php	


    echo" <nav id='nav-menu-container'>
        <ul class='nav-menu'>
        
          <li class='menu-active'><a href='welcomeorganizer.php?oid=". $oid . "'>Organizer Home</a></li>   
          
   
    
        
      </nav>";

      ?>
    </div>
	</header>	

    <br><br>
<div class="col-lg-10 col-md-12" >
					<div class="wrapper" >
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Notice Board</h3>
                                    <h5 class="mb-4">Event Name: <?php echo $ename ?> </h5>
                                    <h5 class="mb-4">Notice: <p><?php echo $notice; ?></p></h5>
									<div id="form-message-warning" class="mb-4"></div> 
		
									<form method="POST" action="#" id="contactForm" name="contactForm">
										<div class="row">
											
											<div class="col-md-12">
												<div class="form-group">
                                                <textarea name="reply" rows="5" cols="50" id="reply" placeholder="reply" ></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
                                                    <button  type="submit" class="btn btn-primary" name="submit" >Send</button>
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>

<?php
 if(isset($_POST['submit']))
 {
     $reply = $_POST['reply'];
     $sql2 = "UPDATE `notice` SET `reply` = '$reply' WHERE `notice`.`time` = '$time' AND `notice`.`EventID` = $eid AND `notice`.`OrganizerID` = $oid;";
     $r2 = mysqli_query($conn,$sql2);
     if($r2){
     echo"<script>alert('Submitted')</script>";
     echo"<script>location.href='welcomeorganizer.php?oid=". $oid. "'</script>";
     }
     else{
      echo"<script>alert('Not Submitted')</script>";
     }

 }

?>




    
   
  
    
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
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/main.js"></script>
	
  <script>
        let table = new DataTable('#myTable');
      </script>

 
</body>
</html>













































