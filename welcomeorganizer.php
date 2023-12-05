<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:welcomeorganizer.php');
	}
?>
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'eventadministration';
    
    $conn = mysqli_connect($servername,$username,$password,$database);
 ?>
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
  <title>Organizer Panel</title>
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
		
		
        p{
            color:red;
        }
		
		.form-control input[type="text"]
		{
			color: blue;
		}
    #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: black;
}







#myTable2 {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable2 th, #myTable2 td {
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
		
		
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px;}
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;background-color:white;}
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

  <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Venue"> -->
  <h1 style="text-align: center;">Inquiry</h1>
<table id="myTable">
  <tr class="header">
  <th style="width:20%;">Event Name</th>
    <th style="width:50%;">Question</th>
    <th style="width:60%;">Answer</th>
  </tr>
  <?php
  $que = "SELECT events.EventID as eid,EventName,qus,ans
  FROM qa JOIN events on qa.EventID=events.EventID 
  JOIN organizer on events.OrganizerID=organizer.OrganizerID
  where organizer.OrganizerID=$oid and ans is null";
  $res = mysqli_query($conn,$que);
  if(mysqli_num_rows($res) > 0)
 {
  while($row = mysqli_fetch_assoc($res))
  {
    $qus = $row["qus"];
    $id=$row["eid"];
    $ans=$row["ans"];
    echo "<tr>
    <th scope='row'>". $row['EventName'] . "</th>
    <td>". $row['qus'] . "</td>
    <td> <form method='POST'>  <input type='text' id='ans' name='ans' oplaceholder='give your ans'></td>
    <td> <button class='btn btn-sm btn-primary' name='submit' >ANS</button></td> 
    <td> <button class='btn btn-sm btn-primary' name='delete' >DEL</button></td> </form>
  </tr>";
  if($ans==null)
  {
    break;
  }

    
  

  }
}
else{
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>No Question Left</strong>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
}

  if(isset($_POST['submit']))
  {
      $ans = $_POST['ans'];
    $sql = "UPDATE qa 
    set ans = '$ans'
    where qus = '$qus' and EventID = '$id'";
     $r = mysqli_query($conn,$sql);
     echo"<script>location.href='welcomeorganizer.php?oid=". $oid. "'</script>";
  }
  if(isset($_POST['delete']))
  {
      $ans = $_POST['ans'];
    $sql2 = "DELETE FROM `qa` WHERE `qus` = '$qus' AND `EventID` = '$id'";
     $r2 = mysqli_query($conn,$sql2);
     echo"<script>location.href='welcomeorganizer.php?oid=". $oid. "'</script>";
  }

      ?>
 
</table>

<br> <br> <br> <br> <br> <br>
<h1 style="text-align: center;">Feedbacks</h1>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name">

<table id="myTable2">
  <tr class="header">
  <th style="width:20%;">Participants Name</th>
    <th style="width:50%;">Event Name</th>
    <th style="width:60%;">Comments</th>
    <th style="width:60%;">Rating</th>
  </tr>
<?php
  $que = "SELECT concat(ParticipantFirstName,' ',ParticipantlastName) as pname,EventName,Comments,Rating
  FROM feedback_ JOIN participants on feedback_.Pid=participants.ParticipantID
                 JOIN events on feedback_.EventID=events.EventID
                 JOIN organizer on organizer.OrganizerID=events.OrganizerID
  Where organizer.OrganizerID=$oid";
  $res = mysqli_query($conn,$que);
  if(mysqli_num_rows($res) > 0)
 {
  while($row = mysqli_fetch_assoc($res))
  {
  
    echo "<tr>
    <th scope='row'>". $row['pname'] . "</th>
    <td>". $row['EventName'] . "</td>
    <td>". $row['Comments'] . "</td>
    <td>". $row['Rating'] . "</td>
    
     </tr>";


    
  

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


