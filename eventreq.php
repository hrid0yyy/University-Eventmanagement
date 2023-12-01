<?php
 $delete = false;
session_start();
if(!isset($_SESSION['username'])){
     header("location:eventreq.php");
    }

?>
<?php
    //storing database details in variables.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eventmanagement";
    
    $conn = mysqli_connect($servername,$username,$password,$database);

    if(isset($_GET['delete']))
    {$EventID = $_GET['delete'];
      $sql = "DELETE FROM `events` WHERE `EventID` = $EventID";
      
      $res = mysqli_query($conn,$sql);
      
      $delete = true;
    }
    
    if(isset($_GET['accept']))
    {
        $EventID = $_GET['accept'];
        $sql2 = "INSERT into aevents select EventID,EventName,Description,filename,EventDate    
        from  events 
        where EventID= $EventID";
         $res2 = mysqli_query($conn,$sql2);
  
        $sql3 = "DELETE FROM `events` WHERE `EventID` = $EventID";
        
        $res3 = mysqli_query($conn,$sql3);
        
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
          <li><a href=":ViewAllEvent.php">View All Event</a></li>
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
      <th scope="col">SL</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
       
       $que = "SELECT * FROM events";
       $sl = 0;
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_assoc($res))
       {
        $sl = $sl + 1;
          echo "<tr>
          <th scope='row'>". $sl . "</th>
          <td>". $row['EventName'] . "</td>
          <td>". $row['Description'] . "</td>
          <td> <button class='accept btn btn-sm btn-primary' id=d".$row['EventID'].">Accept</button>  <button class='delete btn btn-sm btn-primary' id=d".$row['EventID'].">Delete</button></td>
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
      window.location=`/project/eventreq.php?accept=${EventID}`;
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
      window.location=`/project/eventreq.php?delete=${EventID}`;
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













































