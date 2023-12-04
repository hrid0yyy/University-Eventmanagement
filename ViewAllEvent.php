<?php
session_start();
if(!isset($_SESSION['username'])){
     header('location:ViewAllEvent.php');
    }

?>
<!DOCTYPE html>
<html>
	
<head>
	
	<meta charset='utf-8'>
  <title>Add Event</title>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='' name='keywords'>
  <meta content='' name='description'>

  
  <link href='img/favicon.png' rel='icon'>
  <link href='img/apple-touch-icon.png' rel='apple-touch-icon'>
  
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700' rel='stylesheet'>

  
  <link href='lib/bootstrap/css/bootstrap.min.css' rel='stylesheet'>

  
  <link href='lib/font-awesome/css/font-awesome.min.css' rel='stylesheet'>
  <link href='lib/animate/animate.min.css' rel='stylesheet'>
  <link href='lib/ionicons/css/ionicons.min.css' rel='stylesheet'>
  <link href='lib/owlcarousel/assets/owl.carousel.min.css' rel='stylesheet'>
  <link href='lib/lightbox/css/lightbox.min.css' rel='stylesheet'>

  
  <link href='css/style.css' rel='stylesheet'>
    <style>
        body{
            background: url('img/black.jpg');
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
		
		.form-control input[type='text']
		{
			color: blue;
		}
		
		
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px;}
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;background-color:white;}
    </style>
   
</head>
<body> 
	<br><br><br><br><br>
	<header id='header'>
    <div class='container-fluid'>

      <div id='logo' class='pull-left'>
        <h1><a href='#intro' class='scrollto'>New Event Registration</a></h1>
      </div>
		
      <nav id='nav-menu-container'>
        <ul class='nav-menu'>
          <li><a href='welcomeadmin.php'>Admin Home</a></li>
          <li class='menu-active'><a href='eventreq.php'> Event requests</a></li>
          <li><a href='ViewAllEvent.php'>View All Event</a></li>
		  <li><a href='logout2.php'>Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	<br><br>
	
    

    
	<?php
    //storing database details in variables.
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'eventmanagement';
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    //checking if connection is working or not
    //Output Form Entries from the Database
    $sql = 'SELECT EventName,Description FROM aevents ';
    //fire query
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table> <tr><th> Name </th><th> Description </th> </tr>';
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
           echo '<tr > <td>' . $row['EventName'] . '</td>
           <td>' . $row['Description'] . '</td> </tr>';
       }
       echo '</table>';
    }
    else
    {
        echo 'No Upcoming Events';
    }
    // closing connection
    mysqli_close($conn);

?>    
	<script src='lib/jquery/jquery.min.js'></script>
  <script src='lib/jquery/jquery-migrate.min.js'></script>
  <script src='lib/bootstrap/js/bootstrap.bundle.min.js'></script>
  <script src='lib/easing/easing.min.js'></script>
  <script src='lib/superfish/hoverIntent.js'></script>
  <script src='lib/superfish/superfish.min.js'></script>
  <script src='lib/wow/wow.min.js'></script>
  <script src='lib/waypoints/waypoints.min.js'></script>
  <script src='lib/counterup/counterup.min.js'></script>
  <script src='lib/owlcarousel/owl.carousel.min.js'></script>
  <script src='lib/isotope/isotope.pkgd.min.js'></script>
  <script src='lib/lightbox/js/lightbox.min.js'></script>
  <script src='lib/touchSwipe/jquery.touchSwipe.min.js'></script>
  <script src='contactform/contactform.js'></script>

  <!-- Template Main Javascript File -->
  <script src='js/main.js'></script>
  <script src='js/main.js'></script>
	
	
</body>
</html>













































