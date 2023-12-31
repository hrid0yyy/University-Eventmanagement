
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'eventadministration';
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $oid = $_GET["oid"];
    $query="select OrganizerName from organizer where OrganizerID = $oid";
    $res= mysqli_query($conn, $query);
    if ($res->num_rows > 0) {
      $row = mysqli_fetch_assoc($res);
      $oname= $row['OrganizerName'];
    }

 ?>
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
  <title>Organizer Panel</title>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='' name='keywords'>
  <meta content='' name='description'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='img/favicon.png' rel='icon'>
  <link href='img/apple-touch-icon.png' rel='apple-touch-icon'>

  
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700' rel='stylesheet'>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">

  
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
    .txt{
      color: black;
    }        body{
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
<style>
.center {
  margin: auto;
  width: 80%;

  padding: 10px;
}
</style>

	
<body background='img/black.jpg' style='background-size: cover; background-repeat: no-repeat;'>
	
	<header id='header'>
    <div class='container-fluid'>

      <div id='logo' class='pull-left'>
        <h1><a href='#intro' class='scrollto'><?php echo $oname.' Panel' ?></a></h1>
      </div>
<?php	


    echo" <nav id='nav-menu-container'>
        <ul class='nav-menu'>
        
  
          <li><a href='participants.php?oid=". $oid . "'>Participants</a></li>
          <li><a href='volunteers.php?oid=". $oid . "'>Volunteers</a></li>     
          <li><a href='addevent.php?oid=". $oid . "'>Request event</a></li>
          <li><a href='poll.php?oid=". $oid . "'>Poll</a></li>
         
		  <li><a href='logout2.php'>Logout</a></li>
   
        </ul>
        <ul class='nav navbar-nav navbar-right'>
         
        <li class='dropdown'>
 
        <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='label label-pill label-danger count' style='border-radius:10px;'></span> <span class='glyphicon glyphicon-bell' style='font-size:18px;'></span></a>

      <ul class='dropdown-menu'></ul>

     </li>
     </ul>

       
   
    
        
      </nav>";

      ?>
    </div>
	</header>	

  <br><br> <br> <br> <br>
  <div class="center">
  <div class="row">

<div class="col-lg-3">
<div class="panel panel-warning">
<div class="panel-heading">
<div class="row">
<div class="col-xs-6">
<i class="fa fa-check fa-5x"></i>
</div>
<div class="col-xs-6 text-right">
<?php
 $query = "SELECT a1+a2 as accepted
 FROM (SELECT COUNT(*) as a1 ,organizer.OrganizerID as oid
  FROM outsiderequest JOIN events on outsiderequest.EventID=events.EventID
                JOIN organizer on organizer.OrganizerID=events.OrganizerID
                JOIN events_status on outsiderequest.EventID=events_status.EventID
  WHERE accept=1 and organizer.OrganizerID= $oid and EventStatus = 'Ongoing') as tab1
  JOIN
 (SELECT COUNT(*) as a2,organizer.OrganizerID as oid
  FROM request_ JOIN events on request_.EventID=events.EventID
                JOIN organizer on organizer.OrganizerID=events.OrganizerID
                JOIN events_status on request_.EventID=events_status.EventID
  WHERE accept=1 and organizer.OrganizerID= $oid and EventStatus = 'Ongoing') as tab2
  on tab1.oid=tab2.oid";
 $result = $conn->query($query);
 $accepted = 0;
 if ($result->num_rows > 0) {
     
     $row = mysqli_fetch_assoc($result);
     
     $accepted=$row['accepted'];
     
 
  }


?>
<p class="announcement-heading"><?php echo $accepted; ?></p>
<p class="announcement-text">Accepted Events</p>
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
 $query = "SELECT COUNT(*) as pending
 FROM request_ JOIN events on request_.EventID=events.EventID
               JOIN organizer on organizer.OrganizerID=events.OrganizerID
 WHERE accept is NULL and organizer.OrganizerID= $oid";
 $result = $conn->query($query);
 if ($result->num_rows > 0) {
     
     $row = mysqli_fetch_assoc($result);
     
     $pending=$row['pending'];
     
 
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
<div class="col-lg-3">
<div class="panel panel-danger">
<div class="panel-heading">
<div class="row">
<div class="col-xs-6">
<i class="fa fa-tasks fa-5x"></i>
</div>
<div class="col-xs-6 text-right"><?php
 $query = "SELECT COUNT(*) as pending
 FROM request_ JOIN events on request_.EventID=events.EventID
               JOIN organizer on organizer.OrganizerID=events.OrganizerID
 WHERE accept=0 and organizer.OrganizerID= $oid";
 $result = $conn->query($query);
 if ($result->num_rows > 0) {
     
     $row = mysqli_fetch_assoc($result);
     
     $pending=$row['pending'];
     
 
  }


?>
<p class="announcement-heading"><?php echo $pending; ?></p>
<p class="announcement-text">Declined Request</p>
</div>
</div>
</div>


</a>
</div>
</div>


<div class="col-lg-3">
<div class="panel panel-success">
<div class="panel-heading">
<div class="row">
<div class="col-xs-6">
<i class="fa fa-comments fa-5x"></i>
</div>
<div class="col-xs-6 text-right">
<?php
 $query = "SELECT COUNT(*) as remain
 FROM qa JOIN events on qa.EventID=events.EventID
               JOIN organizer on organizer.OrganizerID=events.OrganizerID
 WHERE ans is null and organizer.OrganizerID= $oid";
 $result = $conn->query($query);
 if ($result->num_rows > 0) {
     
     $row = mysqli_fetch_assoc($result);
     
     $remain=$row['remain'];
     
 
  }


?>
<p class="announcement-heading"><?php echo $remain; ?></p>
<p class="announcement-text">Unanswered Question</p>
</div>
</div>
</div>

</a>
</div>
</div>
</div>
</div>
</div>
<br> <br> 

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
    <td> <form method='POST'>  <input class='txt' type='text' id='ans' name='ans' oplaceholder='give your ans' ></td>
    <td> <button class='btn btn-sm btn-primary' id=".$row['qus']." name='submit' >ANS</button></td> 
    <td> <button class='btn btn-sm btn-primary' id=".$row['qus']." name='delete' >DEL</button></td> </form>
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
  <input class="txt" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name">

<table id="myTable2">
  <tr class="header">
  <th style="width:10%;">ParticipantsID</th>
    <th style="width:10%;">Event Name</th>
    <th style="width:10%;">Event Date</th>
    <th style="width:60%;">Comments</th>
    <th style="width:10%;">Rating</th>
    
  </tr>
<?php
  $que = "SELECT Pid,EventName,Rating,Comments,EventDate
  FROM
  (SELECT feedback_.EventID as eid,EventName,Rating,Comments,Pid
    FROM feedback_  JOIN events on feedback_.EventID=events.EventID
                    JOIN organizer on organizer.OrganizerID=events.OrganizerID
    Where organizer.OrganizerID=$oid) as tab1
   JOIN
   (SELECT events.EventID as eid,EventDate
  from events JOIN request_ on request_.EventID=events.EventID
              JOIN slot on slot.SlotID=request_.SlotID
   WHERE OrganizerID=$oid) as tab2
   on tab1.eid=tab2.eid";
  $res = mysqli_query($conn,$que);
  if(mysqli_num_rows($res) > 0)
 {
  while($row = mysqli_fetch_assoc($res))
  {
    echo "<tr>
    <th scope='row'>". $row['Pid'] . "</th>
    <td>". $row['EventName'] . "</td>
    <td>". date('j F, y',strtotime($row['EventDate'])) . "</td>
    <td>". $row['Comments'] . "</td>
    <td>". $row['Rating'] . "</td>
    
     </tr>";


    
  

  }
}
?>
 
</table>
<br> <br>

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


<script>

$(document).ready(function(){

// updating the view with notifications using ajax

function load_unseen_notification(view = '')

{

 $.ajax({
  url:"fetch.php?oid=<?php echo  $oid ?>",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)

  {

   $('.dropdown-menu').html(data.notification);

   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }

  }

 });

}

load_unseen_notification();

// submit form and get new records

// $('#comment_form').on('submit', function(event){
//  event.preventDefault();

//  if($('#eid').val() != '' && $('#oid').val() != '' && $('#notice').val() != '')

//  {

//   var form_data = $(this).serialize();

//   $.ajax({

//    url:"index.php",
//    method:"POST",
//    data:form_data,
//    success:function(data)

//    {

//     $('#comment_form')[0].reset();
//     load_unseen_notification();

//    }

//   });

//  }

//  else

//  {
//   alert("Both Fields are Required");
//  }

// });

// load new notifications

$(document).on('click', '.dropdown-toggle', function(){

 $('.count').html('');

 load_unseen_notification('yes');

});

setInterval(function(){

 load_unseen_notification();;

}, 1000);

});

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


