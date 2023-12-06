<?php
     $flag = 0;
     ?>
<!DOCTYPE html>
<html>
<head>
<title>Event details</title>
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
  <link rel="stylesheet" href="assets/bootstrap-v3/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap-v3/css/bootstrap.css">
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Event Details</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="home.php">Home</a></li>
      
        </ul>
      </nav>
    </div>
	</header>
	<br><br><br><br><br><br><br><br><br>
	
    <style>
        #photo{height:200px;width:190px;}
        #back{
            background-image:url("img/black.jpg");
            background-size:cover;
        }
        h3,h4,h1
		{
            color:white;
        }
		h4{
			text-align: center;
		}
        .label {
            color:black;
}
    
		
		span,label
		{
			color: white;
			font-weight: bold;
			font-size: 18px;
		}
       
		a {
  color: white;
}
		
		
		.pic{
	width:250px;
	height:250px;
}
.picbig{
	position: absolute;
	width:0px;
	-webkit-transition:width 0.3s linear 0s;
	transition:width 0.3s linear 0s;
	z-index:10;
}
.pic:hover + .picbig{
	width:500px;
	height: 500px;

 
}
input[type=text], select {
  color: black;
}
		
		
    </style>
</head>

 
      <!-- Modal content-->
<div class="modal fade" id="exampleModal" role="dialog">
		
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-titel">Fill up your information</h4>
        </div>
        <div class="modal-body" align="center">
          <form action="#" method="POST">
			<input type="text" name="id" id="id" placeholder="Enter ID" style="width: 220px; text-align: center;height: 30px;border-radius: 6px;outline: none; border-bottom-color: lightgreen; border-top-color: lightgreen; border-right-color: lightgreen; border-left-color: lightgreen;">
			  <br>
			  <br>
        <input type="text" name="fname" id="fname" placeholder="Enter your first name" style="width: 220px; text-align: center;height: 30px;border-radius: 6px;outline: none; border-bottom-color: lightgreen; border-top-color: lightgreen; border-right-color: lightgreen; border-left-color: lightgreen;">
			  <br>
			  <br>
        <input type="text" name="lname" id="lname" placeholder="Enter your last name" style="width: 220px; text-align: center;height: 30px;border-radius: 6px;outline: none; border-bottom-color: lightgreen; border-top-color: lightgreen; border-right-color: lightgreen; border-left-color: lightgreen;">
			  <br>
			  <br>
        <input type="text" name="bg" id="bg" placeholder="Enter your blood group" style="width: 220px; text-align: center;height: 30px;border-radius: 6px;outline: none; border-bottom-color: lightgreen; border-top-color: lightgreen; border-right-color: lightgreen; border-left-color: lightgreen;">
			  <br>
			  <br>
        <input type="text" name="number" id="number" placeholder="Enter your phone number" style="width: 220px; text-align: center;height: 30px;border-radius: 6px;outline: none; border-bottom-color: lightgreen; border-top-color: lightgreen; border-right-color: lightgreen; border-left-color: lightgreen;">
			  <br>
			  <br>
        <input type="email" name="email" id="email" placeholder="Enter your email" style="width: 220px; text-align: center;height: 30px;border-radius: 6px;outline: none; border-bottom-color: lightgreen; border-top-color: lightgreen; border-right-color: lightgreen; border-left-color: lightgreen;">
        <br>
			  <br>
        <input type="text" name="role" id="role" placeholder="Enter your role" style="width: 220px; text-align: center;height: 30px;border-radius: 6px;outline: none; border-bottom-color: lightgreen; border-top-color: lightgreen; border-right-color: lightgreen; border-left-color: lightgreen;">
			 <br>
             <br>
       
				<button type="submit" name="submit" class="btn btn-success" name="btn">Enter</button>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="#" method="post">
  <div class="form-group">
    <label class="label" for="id">ID</label>
    <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID" >
 
  </div>
  <div class="form-group">
  <label class="label" for="name">Name</label>
    <input type="text"  class="form-control" id="name" name="name" placeholder="Enter name">
  </div>
  <div class="form-group">
  <label class="label" for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button class="btn btn-primary" id="submit" name="submit" >Register</button>
</form>
      </div>
    </div>
  </div>
</div> -->

<body id="back">

    <?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $database = "eventadministration";
       $eid = $_GET['eid'];
       $conn = mysqli_connect($servername,$username,$password,$database);

   
       //checking if connection is working or not
       //Output Form Entries from the Database
       $query = "SELECT events.EventID,EventName,EventDescription,EventFileBanner,EventDate,VenueName FROM events join request_ on events.EventID=request_.EventID join slot on slot.SlotID=request_.SlotID join venue_ on slot.VenueID=venue_.VenueID
       where events.EventID= $eid";
       $result = $conn->query($query);
       if ($result->num_rows > 0) {
           
           $row = mysqli_fetch_assoc($result);
           
           $eid=$row['EventID'];
           $ename=$row['EventName'];
           $edesc=$row['EventDescription'];
           $efile=$row['EventFileBanner'];
           $edate=$row['EventDate'];
           $eaddress=$row['VenueName'];
     
        }
        else
        {
          $flag = 1;
          $query = "SELECT events.EventID,EventName,EventDescription,EventFileBanner,EventDate,OutsideAddress FROM events join outsiderequest on events.EventID=outsiderequest.EventID  where events.EventID='$eid'";
          $result = $conn->query($query);
          if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);
           
          $eid=$row['EventID'];
          $ename=$row['EventName'];
          $edesc=$row['EventDescription'];
          $efile=$row['EventFileBanner'];
          $edate=$row['EventDate'];
          $eaddress=$row['OutsideAddress'];

        }
      }



    ?>

<?php
   echo'<div class="container">
   <div class="col-md-12">
   
   </div>
   </div> 
     <div class="row"><!--event content-->
      <section>
          <div class="container">
              <div class="date col-md-1">
             
                  <span class="day"><h3>'. $edate .'</h3></span>
              </div>
              <div class="col-md-5"><!--image holder with 5 grid column-->
              <img src="./image/'.  $efile .'" width="350px" height="250px">
              </div>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
              <div class="subcontent col-md-6">
                  <h1 class="title">'. $ename .'</h1>
                  <p class="location">
                 
                  </p>
                  <h3 class="definition">'. $edesc .'</h3>
                  
                  <h3 class="definition">Venue: '. $eaddress .'</h3>';
                   ?>
                  <?php
if($flag==1){
$address= str_replace(" ","+",$eaddress);
?>
<i class="fa fa-map-marker" ></i>'; 
<iframe width="100%" height="300" src="https://maps.google.com/maps?q=<?php

echo $address; ?>&output=embed"></iframe>
<?php

}


?>
                  
                  <br> <br>
                    <?php            
              echo '<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal">Registration</button>
                  <button type="button" class="btn btn-secondary btn-sm" ><a href="Faqs.php?eid='. $eid .'">QNA</a></button>';                
                                 
                  ?> 
              </div>
          </div>
      </section>
  </div> 

  <?php

if(isset($_POST['submit']))
{
    $id= $_POST['id'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $bg= $_POST['bg'];
    $number= $_POST['number'];
    $email= $_POST['email'];
    $role= $_POST['role'];

    $conn = mysqli_connect("localhost","root","","eventadministration") or die($conn);

	

    $sql = "INSERT INTO `participants` (`ParticipantID`, `ParticipantFirstName`, `ParticipantlastName`, `ParticipantEmail`, `ParticipantContactNumber`,`ParticipantBloodGroup`,`ParticipantRole`) VALUES ('$id', '$fname', '$lname', '$email','$number','$bg','$role'); ";
        
    $res = mysqli_query($conn,$sql);
    $sql2 = " INSERT INTO registration_ (`EventID`,`ParticipantID`) VALUES ('$eid','$id');";
    $res2 = mysqli_query($conn,$sql2);

    $reg = true;
	
	
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

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/main.js"></script>
</body>
</html>