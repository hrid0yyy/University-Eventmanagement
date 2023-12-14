<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:welcomeadmin.php');
	}
?>
<?php
  $conn = mysqli_connect('localhost','root','','eventadministration') or die($conn);
  
?>
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
  <title>Admin Home</title>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='' name='keywords'>
  <meta content='' name='description'>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">


  
  <link href='img/favicon.png' rel='icon'>
  <link href='img/apple-touch-icon.png' rel='apple-touch-icon'>

  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

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
.center {
  margin: auto;
  width: 80%;

  padding: 10px;


}
#myTable2 {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable2 th, #myTable2 td {
  color: white;
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable2 tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable2 tr.header, #myTable2 tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: black;
}
</style>
</head>

	
<body background='img/black.jpg' style='background-size: cover; background-repeat: no-repeat;'>
	
	<header id='header'>
    <div class='container-fluid'>

      <div id='logo' class='pull-left'>
        <h1><a href='#intro' class='scrollto'>Admin Home</a></h1>
      </div>
		
      <nav id='nav-menu-container'>
        <ul class='nav-menu'>
          <li class='menu-active'><a href='welcomeadmin.php'>Admin Home</a></li>
          <li><a href='eventreq.php'>Event requests</a></li>
          <li><a href='org.php'>Organziers</a></li>
			 <!-- <li class='menu-has-`children'><a href='applyleave.php'>Leave</a>
            <ul>
              <li><a href='applyleave.php'>Apply For Leave</a></li>
              <li><a href='lstatus.php'>My Leave Request Status</a></li>
            </ul>
          </li> -->
		  <li><a href='logout2.php'>Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
  <br> <br> <br> <br> <br> <br>

  <div class="center">
  <div class="row">

  <div class="col-lg-3">
<div class="panel panel-danger">
<div class="panel-heading">
<div class="row">
<div class="col-xs-6">
<i class="fa fa-tasks fa-5x"></i>
</div>
<div class="col-xs-6 text-right"><?php
 $query = "SELECT COUNT(*) as remain
 FROM slot
  WHERE available = 1;";
 $result = $conn->query($query);
 if ($result->num_rows > 0) {
     
     $row = mysqli_fetch_assoc($result);
     
     $pending=$row['remain'];
     
 
  }


?>
<p class="announcement-heading"><?php echo $pending; ?></p>
<p class="announcement-text">Reamaining SLot of this month</p>
</div>
</div>
</div>


</a>
</div>
</div>
<div class="col-lg-3">
<div class="panel panel-danger">
<div class="panel-heading">
<div class="row">
<div class="col-xs-6">
<i class="fa fa-tasks fa-5x"></i>
</div>
<div class="col-xs-6 text-right"><?php
 $query = "SELECT o+i as req
 FROM
 (SELECT COUNT(*) as o
 FROM outsiderequest
 where accept is null) as tab1
 JOIN
 (SELECT COUNT(*) as i
 FROM request_
 where accept is null) as tab2";
 $result = $conn->query($query);
 if ($result->num_rows > 0) {
     
     $row = mysqli_fetch_assoc($result);
     
     $pending=$row['req'];
     
 
  }


?>
<p class="announcement-heading"><?php echo $pending; ?></p>
<p class="announcement-text">Pending Request</p>
</div>
</div>
</div>


</a>
</div>
</div>

</div>
</div>
</div>
<h1 style="text-align: center; color: white;">Notice Board</h1>
<br>
  <input class="txt" type="text" style="width:100%; height:50px; " id="myInput" onkeyup="myFunction()" placeholder="Search Organizer Name">  
  <table id="myTable2">
  <tr class="header">
  <th style="width:10%;">Notice Date</th>
    <th style="width:10%;">Organizer Name</th>
    <th style="width:40%;">Notice</th>
    <th style="width:40%;">Reply</th>
    
  </tr>
<?php
  $que = "SELECT OrganizerName,notice,reply,time,OrganizerEmail
  FROM notice JOIN organizer on notice.OrganizerID=organizer.OrganizerID
  ORDER BY `notice`.`time` DESC";
  $res = mysqli_query($conn,$que);
  if(mysqli_num_rows($res) > 0)
 {
  while($row = mysqli_fetch_assoc($res))
  {
    echo "<tr>
    <th scope='row'>".   date('h:i:s a m/d/Y', strtotime($row['time']))  . "</th>
    <td>". $row['OrganizerName'] . "</td>
    <td>". $row['notice'] . "</td>"; ?>

<?php
   if($row['reply']==null)
   {
     echo "<td>NO RESPONSE YET, contact mail: <a href='https://mail.google.com/mail/u/0/#inbox?compose=new'>".$row['OrganizerEmail']."</a></td>";
   }
   else{
   echo "<td>". $row['reply'] . "</td>";
   }
    echo"</tr>";


    
  

  }
}
?>
 
</table>

<script>





function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}



</script>

	
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


