<?php
 $delete = false;
session_start();
if(!isset($_SESSION['username'])){
     header("location:eventreq.php");
    }

?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eventadministration";
    
    $conn = mysqli_connect($servername,$username,$password,$database);

    if(isset($_GET['delete']))
    {$EventID = $_GET['delete'];
      $sql = "UPDATE `request_` SET `accept` = '0' WHERE `request_`.`EventID` = '$EventID';";
      
      $res = mysqli_query($conn,$sql);
      
      
      
      $delete = true;
    }
    
    if(isset($_GET['accept']))
    {
        $EventID = $_GET['accept'];
        $sql2 = "UPDATE `request_` SET `accept` = '1' WHERE `request_`.`EventID` = '$EventID';";
        
         $res2 = mysqli_query($conn,$sql2);

         $query="INSERT IGNORE INTO events_status
         SELECT 'Ongoing',EventID
         FROM events
         where EventID = $EventID";
         $res7= mysqli_query($conn, $query);

         $sql3 = "UPDATE `slot` JOIN `request_` on slot.SlotID=request_.SlotID SET `available` = '0' WHERE `request_`.`EventID` = '$EventID';";

        $res3 = mysqli_query($conn,$sql3);
    }

    if(isset($_GET['odelete']))
    {$EventID = $_GET['odelete'];
      $sql = "UPDATE `outsiderequest` SET `accept` = '0' WHERE `outsiderequest`.`EventID` = '$EventID';";
      
      $res = mysqli_query($conn,$sql);
      
      
      
      $delete = true;
    }
    
    if(isset($_GET['oaccept']))
    {
        $EventID = $_GET['oaccept'];
        $sql2 = "UPDATE `outsiderequest` SET `accept` = '1' WHERE `outsiderequest`.`EventID` = '$EventID';";
        
         $res2 = mysqli_query($conn,$sql2);
    }


    ?>
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>Requests</title>
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
        <h1><a href="#intro" class="scrollto">Requests</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomeadmin.php">Admin Home</a></li>
          <li class="menu-active"><a href="eventreq.php">Event Requests</a></li>
          <li><a href="org.php">Organziers</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
    <?php
    if($delete)
 {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Successfully, </strong>Deleted
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
 }
 ?>
	
	<br><br>

    
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header">Requests</h3>
    </div>
    <br><br>






    <div class="container my-4">
  <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Slot</th>
      <th scope="col">Event Name</th>
      <th scope="col">Organizer Name</th>
      <th scope="col">Performance</th>
      
      <th scope="col">Response</th>
      <th scope="col">Details</th>
      <th scope="col">Notice</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
       
       $que = "SELECT tab1.oid as oid ,SlotID,OrganizerName,EventName,rat,eid
       FROM 
       (SELECT organizer.OrganizerID as oid,OrganizerName,events.EventID as  eid,EventName,EventDescription,SlotID
              FROM request_ join events on request_.EventID=events.EventID 
                            JOIN organizer on events.OrganizerID=organizer.OrganizerID           
              where accept is NULL) as tab1
              JOIN
       (SELECT organizer.OrganizerID as oid, avg(Rating) as rat
       FROM feedback_ JOIN events on feedback_.EventID=events.EventID
                       JOIN organizer on organizer.OrganizerID=events.OrganizerID) as tab2
               ON tab1.oid=tab2.oid";
       $sl = 0;
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_assoc($res))
       {
        $sl = $sl + 1;
          echo "<tr>
          <th scope='row'>". $row['SlotID']. "</th>
          <td>". $row['EventName'] . "</td>
          <td>". $row['OrganizerName'] . "</td>
          <td>". $row['rat'] . "</td>
          <td> <button class='accept btn btn-sm btn-primary' id=d".$row['eid'].">Accept</button>  <button class='delete btn btn-sm btn-primary' id=d".$row['eid'].">Delete</button></td>
          <td><a href='adetails.php?eid=". $row['eid'] ."'>Link</a></td>
          <td><a href='notice.php?oid=". $row['oid'] ."&oname=".$row['OrganizerName']."&eid=".$row['eid']."&ename=".$row['EventName']."'>Link</a></td>
        </tr>";
         
       }
       $que = "SELECT tab1.oid as oid,OutsideAddress,OrganizerName,EventName,rat,eid
       FROM 
       (SELECT organizer.OrganizerID as oid,OrganizerName,events.EventID as  eid,EventName,OutsideAddress
              FROM outsiderequest join events on outsiderequest.EventID=events.EventID 
                            JOIN organizer on events.OrganizerID=organizer.OrganizerID           
              where accept is NULL) as tab1
              JOIN
       (SELECT organizer.OrganizerID as oid, avg(Rating) as rat
       FROM feedback_ JOIN events on feedback_.EventID=events.EventID
                       JOIN organizer on organizer.OrganizerID=events.OrganizerID) as tab2
               ON tab1.oid=tab2.oid";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_assoc($res))
       {
        $sl = $sl + 1;
          echo "<tr>
          <th scope='row'>". $row['OutsideAddress']. "</th>
          <td>". $row['EventName'] . "</td>
          <td>". $row['OrganizerName'] . "</td>
          <td>". $row['rat'] . "</td>
          <td> <button class='oaccept btn btn-sm btn-primary' id=d".$row['eid'].">Accept</button>  <button class='odelete btn btn-sm btn-primary' id=d".$row['eid'].">Delete</button></td>
          <td><a href='adetails.php?eid=". $row['eid'] ."'>Link</a></td>

          <td><a href='notice.php?oid=". $row['oid'] ."&oname=".$row['OrganizerName']."&eid=".$row['eid']."&ename=".$row['EventName']."'>Link</a></td>
        </tr>";
         
       }
        
 ?>
   
  </tbody>  
</table>






    
   
  
    
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

      <script>
     
     accept= document.getElementsByClassName('accept');
      Array.from(accept).forEach((element)=>{
      element.addEventListener("click",(e)=>{
    console.log("edit ", );
    EventID = e.target.id.substr(1,);
    console.log(EventID);
    
    if(confirm("Press yes to accept!"))
    {
      console.log("yes");
      window.location=`/university/eventreq.php?accept=${EventID}`;
    }
    else
    {
      console.log("No");
    }
    
      })

      })



         deletes = document.getElementsByClassName('delete');
      Array.from(deletes).forEach((element)=>{
      element.addEventListener("click",(e)=>{
    console.log("edit ", );
    EventID = e.target.id.substr(1,);
    console.log(EventID);
    
    if(confirm("Press yes to delete!"))
    {
      console.log("yes");
      window.location=`/university/eventreq.php?delete=${EventID}`;
    }
    else
    {
      console.log("No");
    }
    
      })

      })



      accept= document.getElementsByClassName('oaccept');
      Array.from(accept).forEach((element)=>{
      element.addEventListener("click",(e)=>{
    console.log("edit ", );
    EventID = e.target.id.substr(1,);
    console.log(EventID);
    
    if(confirm("Press yes to accept!"))
    {
      console.log("yes");
      window.location=`/university/eventreq.php?oaccept=${EventID}`;
    }
    else
    {
      console.log("No");
    }
    
      })

      })



         deletes = document.getElementsByClassName('odelete');
      Array.from(deletes).forEach((element)=>{
      element.addEventListener("click",(e)=>{
    console.log("edit ", );
    EventID = e.target.id.substr(1,);
    console.log(EventID);
    
    if(confirm("Press yes to delete!"))
    {
      console.log("yes");
      window.location=`/university/eventreq.php?odelete=${EventID}`;
    }
    else
    {
      console.log("No");
    }
    
      })

      }) 
      </script>	
</body>
</html>













































