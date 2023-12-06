
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
    <h3 class="page-header">Request for a event</h3>
    </div>
    <br><br>
    
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
                    <div class="col-md-2 text-right"><label for="photo">&nbsp;&nbsp;Photo</label></div>
                    <div class="col-md-3"><input type="file" class="form-control" id="uploadfile" name="uploadfile" style="height:45px" /></div>
                </div>
                <br><br>
               
    
                <div class="row">
                    <div class="col-md-1"><label for="ename">Event Name<span>&#42;</span></label></div>
                    <div class="col-md-5">
                    <input type="text" class="form-control has-success" id="ename" placeholder="Enter Event Name" name="ename" onblur="checkUName()" onkeyup="checkUserName()" required></div> 
                    
                </div>
                
            </div>

            <div class="form-group">

                <div class="row">
                   <div class="col-md-1"><label for="edesc">Description<span>&#42;</span></label></div>
                    <div class="col-md-5"><input type="text" class="form-control" id="edesc" placeholder="Enter Event Description" name="edesc"  required></div> 
                    <div class="col-md-1"></div>
                    
                </div>
                <br> <br>
                <div class="row">
                   <div class="col-md-1"><label for="address">Address<span></span></label></div>
                    <div class="col-md-5"><input type="text" class="form-control" id="address" placeholder="Address (If its outside of uiu)" name="address" ></div> 
                    
                    
                    
                </div>
               
            </div>

             
        </div>
        
       
        
       
        
        <br><br>
        
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

if(isset($_POST['submit']))
{
    $eid= $_POST['eid'];
    $ename= $_POST['ename'];
    $edesc= $_POST['edesc'];
    $address= $_POST['address'];
    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

    $conn = mysqli_connect("localhost","root","","eventadministration") or die($conn);

	
	
  
    $sql = mysqli_query($conn,"INSERT INTO `events` (`EventID`, `EventName`, `OrganizerID`, `EventDescription`,`EventFileBanner`) VALUES ('$eid', '$ename', '$oid','$edesc','$filename')") or die("Query Failed".mysqli_error($conn));
    $sql2 = mysqli_query($conn,"INSERT INTO `outsiderequest` (`EventID`, `OutsideAddress`) VALUES ('$eid', '$address')") or die("Query Failed".mysqli_error($conn));

    if($sql2)
	{
	
		echo "<script>alert('Registration Successfull')</script>";
		echo "<script>location.href='welcomeorganizer.php?oid=". $oid . "'</script>";

	}
	
	
}
?>









































