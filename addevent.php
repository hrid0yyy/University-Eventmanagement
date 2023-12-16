<?php

    include 'functions.php';
 ?>
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>Add Event</title>
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
            background: url("img/event.png");
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
        <h1><a href="#intro" class="scrollto">New Event Registration</a></h1>
      </div>
		
      <?php	
  $oid = $_GET["oid"];
    echo" <nav id='nav-menu-container'>
        <ul class='nav-menu'>
          
          <li class='menu-active'><a href='welcomeorganizer.php?oid=". $oid . "'>Organizer Home</a></li> 
          <li class='menu-active'><a href='sponsers.php?oid=". $oid . "'>Sponsers</a></li>  
          <li class='menu-active'><a href='addevent.php?oid=". $oid . "'>Add Event</a></li>
          <li><a href='viewslot.php?oid=". $oid . "'>Available slot</a></li>
		  <li><a href='logout2.php'>Logout</a></li>
        </ul>
      </nav>";

      ?>

    </div>
	</header>	
	
	<br><br>
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header">Request for a event <span style = "color: red;">(IF ITS OUTSIDE UIU)</span> </h3>
    </div>
    <br>
    
    <div class="container add_employee_form">
    <form action="" method="POST" enctype="multipart/form-data" id="add_emp_form">
        <h4 class="page-header" align="center">Event Details</h4>
        <div class="box">
            <div class="form-group">  
                
                
                  
            </div>
            <div class="form-group">
            <div class="row">
                    <div class="col-md-1"><label for="eid">Event ID<span>&#42;</span></label></div>
                    <div class="col-md-5">
                    <input type="text" class="form-control has-success" id="eid" placeholder="Enter Event ID" name="eid" onblur="checkUName()" onkeyup="checkUserName()" required></div> 
                    <div class="col-md-2 text-left"><label for="photo">&nbsp;&nbsp;Banner</label></div>
                    <div class="col-md-3" style="margin-left: -112px;"><input type="file" class="form-control" id="uploadfile" name="uploadfile" style="height:45px" /></div>
                </div>
                <br>
               
    
                <div class="row">
                    <div class="col-md-1"><label for="ename">Event Name<span>&#42;</span></label></div>
                    <div class="col-md-5">
                    <input type="text" class="form-control has-success" id="ename" placeholder="Enter Event Name" name="ename" onblur="checkUName()" onkeyup="checkUserName()" required></div> 
                  
                    
                </div>
                
            </div>

            <div class="form-group">

                <div class="row">
                <div > <label for="edesc">Description<span>&#42;</span></label></div>
                <div class="col-md-5" style="margin-left: 0px;"><textarea name="edesc" rows="5" cols="50" id="edesc" placeholder="Event Description" required></textarea></div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                 <div class="col-md-4" style="margin-left: 0px;"><textarea name="esdesc" rows="3" cols="50" id="esdesc" placeholder="Headline(Short Description)" required></textarea></div>  
                    <div class="col-md-1"></div>
                    
                </div>
                <br> 
                <div class="row">
                   <div class="col-md-1"><label for="eguest">Event Guests<span>&#42;</span></label></div>
                   <div class="col-md-5" style="margin-left: 00px;"><textarea name="eguest" rows="2" cols="50" id="eguest" placeholder="guests" required></textarea></div> 
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                 <div class="col-md-4" style="margin-left: 0px;"><textarea name="ebudget" rows="1" cols="50" id="ebudget" placeholder="Budget" required></textarea></div>
                    
                </div>
                <br> 
                <div > <label for="types">Event Type Per Line<span>&#42;</span></label></div>
                <div class="col-md-5" style="margin-left: 70px;"><textarea name="types" rows="5" cols="50" id="types" placeholder="Event Types" ></textarea></div> 
                   <br> 
                   <div > <label for="sponsers">Sponsers Per Line<span>&#42;</span></label></div>
                <div class="col-md-5" style="margin-left: 70px;"><textarea name="sponsers" rows="5" cols="50" id="sponsers" placeholder="Event Sponsers" ></textarea></div> 
                   <br> 
                <div class="row">
                   <div class="col-md-1"><label for="address">Address<span>&#42;</span></label></div>
                    <div class="col-md-5"><input type="text" class="form-control" id="address" placeholder="Address" name="address" required ></div> 
                    
                    
                    
                </div>
               
            </div>
            <div class="row">
                   <div class="col-md-1"><label for="edate">Date<span>&#42;</span></label></div>
                    <div class="col-md-5"><input type="date" class="form-control" id="edate" placeholder="Date" name="edate" required ></div> 
                    
                    
                    
                </div>
                <br>
                <div class="row">
                   <div class="col-md-1"><label for="estime">Start Time<span>&#42;</span></label></div>
                    <div class="col-md-5"><input type="time" class="form-control" id="estime" placeholder="Event Start Time" name="estime" required ></div> 
                    
                    
                    
                </div>
                <br>
                <div class="row">
                   <div class="col-md-1"><label for="edtime">End Time<span>&#42;</span></label></div>
                    <div class="col-md-5"><input type="time" class="form-control" id="edtime" placeholder="Event End Time" name="edtime" required ></div> 
                    
                    
                    
                </div>
                <br>
                <div class="row">
                   <div class="col-md-1"><label for="capacity">Capacity<span>&#42;</span></label></div>
                    <div class="col-md-5"><input type="text" class="form-control" id="capacity" placeholder="Event capacity" name="capacity" required ></div> 
                    
                    
                    
                </div>
               
            </div>

             
        </div>
        
       
        
       
        
        <br>
        
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <button class="btn btn-success btn-lg btn-outline-* btn-block" id="submit" name="submit">Add&nbsp;Event</button>
                </div>
				<div class="col-md-4"></div>
            </div>
        </div>
    </form>
    </div>
    
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
  <script src="js/main.js"></script>
	
	
</body>
</html>



<?php
  $pdo = pdo_connect_mysql();
if(isset($_POST['submit']))
{
    $eid= $_POST['eid'];
    $ename= $_POST['ename'];
    $edesc= $_POST['edesc'];
    $esdesc= $_POST['esdesc'];
    $eguest= $_POST['eguest'];
    $ebudget= $_POST['ebudget'];
    $edate= $_POST['edate'];
    $estime= $_POST['estime'];
    $edtime= $_POST['edtime'];
    $address= $_POST['address'];
    $capacity= $_POST['capacity'];

    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;


    

    $conn = mysqli_connect("localhost","root","","eventadministration") or die($conn);

	
	
  
    $sql = mysqli_query($conn,"INSERT INTO `events` (`EventID`, `EventName`, `OrganizerID`, `EventDescription`,`EventFileBanner`,`EventGuest`,`EventBudget`,`ShortDescription`) VALUES ('$eid', '$ename', '$oid','$edesc','$filename','$eguest','$ebudget','$esdesc')") or die("Query Failed".mysqli_error($conn));
    $sql2 = mysqli_query($conn,"INSERT INTO `outsiderequest` (`EventID`, `OutsideAddress`,`EventDate`,`StartTime`,`EndTime`,`capacity`) VALUES ('$eid', '$address','$edate','$estime','$edtime','$capacity')") or die("Query Failed".mysqli_error($conn));


  
    $sponsers = isset($_POST['sponsers']) ? explode(PHP_EOL, $_POST['sponsers']) : '';
    foreach($sponsers as $sponser) {
        
        if (empty($sponser)) continue;
        
        $stmt = $pdo->prepare('INSERT INTO event_sponsers (EventID, SponsorID) VALUES (?, ?)');
        $stmt->execute([ $eid, $sponser ]);
    }

    $types = isset($_POST['types']) ? explode(PHP_EOL, $_POST['types']) : '';
        foreach($types as $type) {
            
            if (empty($type)) continue;
           
            $stmt = $pdo->prepare('INSERT INTO events_eventtype (EventID, EventType) VALUES (?, ?)');
            $stmt->execute([ $eid, $type ]);
        }

    if($sql2)
	{
	
		echo "<script>alert('Registration Successfull')</script>";
		echo "<script>location.href='welcomeorganizer.php?oid=". $oid . "'</script>";

	}
	

}





?>









































