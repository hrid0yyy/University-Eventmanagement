<?php
 $vid = $_GET['vid'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "eventadministration";

$conn = mysqli_connect($servername,$username,$password,$database);

include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Slot
</title>
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
      background: url("img/prev.jpg");
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
    <h1><a href='#intro' class='scrollto'></a></h1>
  </div>
  <?php	

echo" <nav id='nav-menu-container'>
    <ul class='nav-menu'>
      
      <li class='menu-active'><a href='venue.php'>Venues</a></li>   

    </ul>
  </nav>";

  ?>
</div>
</header>	

<br><br> <br> <br> <br>
<?=template_header('Create Poll')?>
<div class="content update">
<h2 style="color: white;" >Create Slot</h2>
<form action="#" method="post">
     <label for="sid">Slot ID</label>
    <input type="text" name="sid" id="sid" placeholder="Enter Slot ID" required>
    <label for="date">Date</label>
    <input type="date" name="date" id="date" placeholder="Enter Date" required>
    <label for="stime">Start Time</label>
    <input type="time" name="stime" id="stime"  >
    <label for="etime">End Time</label>
    <input type="time" name="etime" id="etime"  >
   
    <input type="submit" value="Create" name="submit">
</form>


 

</div>
<?=template_footer()?>
<?php

if (isset($_POST['submit'])) {
$sid = $_POST['sid'];
$date = $_POST['date'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];

$sql = "INSERT INTO `slot` (`VenueID`, `SlotID`, `EventDate`, `StartTime`, `EndTime`,`available`) VALUES ('$vid','$sid','$date', '$stime','$etime',1); ";
        
    $res = mysqli_query($conn,$sql);
if($res)
{
    echo "<script>alert('Created Successfull')</script>";
    echo "<script>location.href='venue.php'</script>";
}

}
?>





</body>
</html>