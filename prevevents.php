<?php
    $date = date('Y-m-d');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eventadministration";
    
    $conn = mysqli_connect($servername,$username,$password,$database);

    if(isset($_POST['submit']))
 {
   // update
   $eventid = $_POST['eid'];
   $id = $_POST['id'];
    $pass = $_POST['pass'];

    $query = "SELECT * 
    FROM participants JOIN registration_ ON participants.ParticipantID=registration_.ParticipantID
    JOIN events on registration_.EventID=events.EventID
     WHERE participants.ParticipantID=$id and participants.pass='$pass' and events.EventID = $eventid";
    $result = $conn->query($query);
    if($result){
    if ($result->num_rows > 0) { 
   
      while($row = mysqli_fetch_assoc($result)){
   $file= 'image/';
    $file_path= $file . $row["EventFileBadge"];

        if (file_exists($file_path)) {
          
            // Set appropriate headers
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_path));
    
            // Output the file
            readfile($file_path);
    
            // Terminate the script to prevent additional output
            exit;
        } 
  
      }
    }
  }

 
  
 }


 








    $query="UPDATE events_status JOIN request_ on events_status.EventID=request_.EventID
    JOIN slot on request_.SlotID=slot.SlotID
SET EventStatus = 'Previous'
WHERE EventDate <  '$date' and accept=1";
    $res= mysqli_query($conn, $query);



    $query="UPDATE events_status JOIN outsiderequest on events_status.EventID=outsiderequest.EventID
                     
    SET EventStatus = 'Previous'
    WHERE EventDate <  '$date' and accept = 1";
    $res= mysqli_query($conn, $query);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Previous Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">



<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
.btn-flash-border-ash {
    color: #495057; /* Text color */
    background-color: #d2d2d2; /* Ash color */
    border-color: #b0b0b0; /* Border color */
}

.btn-flash-border-ash:hover {
    background-color: #87CEEB; /* Ash color on hover */
    border-color: #87CEEB; /* Border color on hover */
}


  .ratings-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 800px;
    margin: 20px auto;
}


.item {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
}

.item-name {
    font-weight: bold;
}

.rating {
    color: #00f;
    font-size: 24px;
}

.star {
    color: #ddd;
    font-size: 20px;
    cursor: pointer;
}

.filled {
    color: #f8d825;
}
    	body{
        background: url("img/prev.jpg");
    margin-top:20px;
    overflow: scroll;
    scroll-snap-type: mandatory;
    display: flex;
}

.card-margin {
    margin-bottom: 1.875rem;
}

.card {
    border: 0;
    box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 1px solid #e6e4e9;
    border-radius: 8px;
}

.card .card-header.no-border {
    border: 0;
}
.card .card-header {
    background: none;
    padding: 0 0.9375rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    min-height: 50px;
}
.card-header:first-child {
    border-radius: calc(8px - 1px) calc(8px - 1px) 0 0;
}

.widget-49 .widget-49-title-wrapper {
  display: flex;
  align-items: center;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-primary {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #edf1fc;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-day {
  color: #4e73e5;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-month {
  color: #4e73e5;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-secondary {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #fcfcfd;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-day {
  color: #dde1e9;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-month {
  color: #dde1e9;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-success {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #e8faf8;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-day {
  color: #17d1bd;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-month {
  color: #17d1bd;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-info {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #ebf7ff;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-day {
  color: #36afff;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-month {
  color: #36afff;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-warning {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: floralwhite;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-day {
  color: #FFC868;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-month {
  color: #FFC868;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-danger {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #feeeef;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-day {
  color: #F95062;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-month {
  color: #F95062;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-light {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #fefeff;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-day {
  color: #f7f9fa;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-month {
  color: #f7f9fa;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-dark {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #ebedee;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-day {
  color: #394856;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-month {
  color: #394856;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-base {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #f0fafb;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-day {
  color: #68CBD7;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-month {
  color: #68CBD7;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-meeting-info {
  display: flex;
  flex-direction: column;
  margin-left: 1rem;
}

.widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-pro-title {
  color: #3c4142;
  font-size: 14px;
}

.widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-meeting-time {
  color: #B1BAC5;
  font-size: 13px;
}

.widget-49 .widget-49-meeting-points {
  font-weight: 400;
  font-size: 13px;
  margin-top: .5rem;
}

.widget-49 .widget-49-meeting-points .widget-49-meeting-item {
  display: list-item;
  color: #727686;
}

.widget-49 .widget-49-meeting-points .widget-49-meeting-item span {
  margin-left: .5rem;
}

.widget-49 .widget-49-meeting-action {
  text-align: right;
}

.widget-49 .widget-49-meeting-action a {
  text-transform: uppercase;
}
    </style>
</head>
<header id="header">
    <div class="container-fluid">

    <nav aria-label="breadcrumb" class="main-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="home.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Previous Events</li>
</ol>
</nav>


<br>
<body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Download your badge</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
        <input type="hidden" name ="eid" id="eid">
         <label for="id">ID</label>
         <input  class="form-control" type="text" name="id" placeholder="Enter your participant ID">
         <br>
         <label for="pass">Password</label>
         <input class="form-control" type="text" name="pass" placeholder="Enter your password">
         <br>
         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
     
    </div>
  </div>
</div>


<?php
 $sql = "SELECT tab2.eid,rat,EventName,EventDescription,EventDate,OrganizerName
 FROM ((SELECT events.EventID as eid,EventName,EventDescription,EventDate,OrganizerName FROM events join events_status on events.EventID=events_status.EventID
  join organizer on events.OrganizerID=organizer.OrganizerID
             JOIN outsiderequest on outsiderequest.EventID=events.EventID
              where EventStatus='Previous')
 UNION
 (SELECT events.EventID as eid,EventName,EventDescription,EventDate,OrganizerName FROM events join events_status on events.EventID=events_status.EventID
  join organizer on events.OrganizerID=organizer.OrganizerID
             JOIN request_ on request_.EventID=events.EventID
             join slot on slot.SlotID=request_.SlotID
              where EventStatus='Previous')) as tab1
              JOIN
              (SELECT EventID as eid,avg(rating) as rat
 FROM feedback_ 
 GROUP by EventID) as tab2
 on tab1.eid=tab2.eid";
 $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows($result) > 0)
 {
   while($row = mysqli_fetch_assoc($result)){
 echo '<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="card card-margin">
<div class="card-header no-border">
<h5 class="card-title">'. $row["EventName"] .'</h5>
</div>
<div class="card-body pt-0">
<div class="widget-49">
<div class="widget-49-title-wrapper">
<div class="widget-49-date-primary">
<span class="widget-49-date-month" style="color: navy-blue; font-size: 10px;">'. date('j F',strtotime($row['EventDate'])) .'</span>
</div> &nbsp;&nbsp;&nbsp;
<div class="widget-49-meeting-info">
<span class="widget-49-pro-title">'. $row["OrganizerName"] .'</span>
<span class="widget-49-meeting-time" style="color: navy-blue; ">';   if($row['rat'] != null) {   
  for ($i = 1; $i <= 5; $i++) {
   echo "<span class='star " . (($i <= $row['rat']) ? 'filled' : '') . "'>&#9733;</span>";
}   
}  echo'</span>
</div>
</div>
<br>
<span>'. $row["EventDescription"] .'</span>
<br> <br> 
<div class="widget-49-meeting-action">
<a class="down btn btn-sm btn-flash-border-ash" id='.$row['eid'].' data-toggle="modal" data-target="#exampleModal">Badge</a> &nbsp; 
<a href="feedback.php?eid='. $row['eid'] .'" class="btn btn-sm btn-flash-border-ash">Feedback</a>
</div>
</div>
</div>
</div>
</div>';
   }
  }


?>


<script>
   edits = document.getElementsByClassName('down');
      Array.from(edits).forEach((element)=>{
      element.addEventListener("click",(e)=>{
    eid.value = e.target.id;
    console.log(e.target.id);
  
    $('#exampleModal').modal('toggle')
      })

      })
</script>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>