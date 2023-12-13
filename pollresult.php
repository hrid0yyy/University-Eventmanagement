<?php 
$pid = $_GET['pid'];
$ename = $_GET['ename'];

?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eventadministration";
    
    $conn = mysqli_connect($servername,$username,$password,$database);



    ?>
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>Poll Result</title>
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
        <h1><a href="#intro" class="scrollto">Organizers</a></h1>
      </div>
		
      <?php	
  $oid = $_GET["oid"];

    echo" <nav id='nav-menu-container'>
        <ul class='nav-menu'>
        
          <li class='menu-active'><a href='welcomeorganizer.php?oid=". $oid . "'>Organizer Home</a></li>   
          <li><a href='createpoll.php?oid=". $oid . "'>Create Poll</a></li>


     </li>
     </ul>

       
   
    
        
      </nav>";

      ?>
    </div>
	</header>	
	
	<br><br>

    
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header"><?php echo $ename ?> poll's result</h3>
    </div>
    <br><br>






    <div class="container my-4">
  <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Poll Option</th>
      <th scope="col">Poll Vote</th>
      <th scope="col">Poll Percentage</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
      $p = 0;  
       $que = "SELECT tab1.pid,PollOpt,count,total
       FROM(
       SELECT event_poll.PollID as pid,SUM(COUNT) as total
       FROM event_poll JOIN polloption on event_poll.PollID=polloption.PollID
       where event_poll.PollID=$pid) as tab1
       
       JOIN
       
       (SELECT event_poll.PollID as pid,PollOpt,count
       FROM event_poll JOIN polloption on event_poll.PollID=polloption.PollID
       where event_poll.PollID=$pid) as tab2
       
       on tab1.pid=tab2.pid";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_assoc($res))
       {
        if($row['total']!=0){
        $p = ($row['count']/$row['total'])*100;
        }
        else
        {
            $p = 0;
        }
          echo "<tr>
          <th scope='row'>". $row['PollOpt']. "</th>
          <td>". $row['count'] . "</td>
          <td>".$p ."%</td>
          
  
        </tr>";
         
       }
      
        
 ?>
   
  </tbody>  
</table>
<br> <br>




    
   
  
    
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
	

 
</body>
</html>













































