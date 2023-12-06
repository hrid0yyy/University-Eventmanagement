<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'eventadministration';
    
    $conn = mysqli_connect($servername,$username,$password,$database);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Poll</title>
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
  <link rel='stylesheet' href='assets/bootstrap-v3/css/bootstrap.css'>
  <link rel='stylesheet' href='assets/bootstrap-v3/css/bootstrap.css'>
  <link rel='stylesheet' href='//fonts.googleapis.com/icon?family=Material+Icons' />
  <link href='css/style.css' rel='stylesheet'>
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
    </style>    
</head>
<body background='img/black.jpg' style='background-size: cover; background-repeat: no-repeat;'>
	
	<header id='header'>
    <div class='container-fluid'>

      <div id='logo' class='pull-left'>
        <h1><a href='#intro' class='scrollto'>Organizer Panel</a></h1>
      </div>
<?php	
  $oid = $_GET["oid"];
    echo" <nav id='nav-menu-container'>
        <ul class='nav-menu'>
          
          <li class='menu-active'><a href='welcomeorganizer.php?oid=". $oid . "'>Organizer Home</a></li>   
          <li><a href='addevent.php?oid=". $oid . "'>Request event</a></li>
		  <li><a href='logout2.php'>Logout</a></li>
        </ul>
      </nav>";

      ?>
    </div>
	</header>	

  <br><br> <br> <br> <br>
    
</body>
</html>