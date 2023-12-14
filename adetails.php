<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "eventadministration";
$eid = $_GET["eid"];
$conn = mysqli_connect($servername,$username,$password,$database);
$flag = 0;

//checking if connection is working or not
//Output Form Entries from the Database
$query = "SELECT events.EventID,EventName,EventBudget,EventDescription,EventFileBanner,EventDate,VenueName,StartTime,EndTime,OrganizerName,OrganizerEmail,OrganizerContactNumber,ShortDescription FROM events join request_ on events.EventID=request_.EventID join slot on slot.SlotID=request_.SlotID join venue_ on slot.VenueID=venue_.VenueID
JOIN organizer on events.OrganizerID=organizer.OrganizerID  where events.EventID=$eid";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    
    $row = mysqli_fetch_assoc($result);
    
    $eid=$row['EventID'];
    $ename=$row['EventName'];
    $edesc=$row['EventDescription'];
    $esdesc=$row['ShortDescription'];
    $efile=$row['EventFileBanner'];
    $edate=$row['EventDate'];
    $eaddress=$row['VenueName'];
    $estime=$row['StartTime'];
   $eetime=$row['EndTime'];
   $oname=$row['OrganizerName'];
   $onumber=$row['OrganizerContactNumber'];
   $oemail=$row['OrganizerEmail'];
   $ebudget=$row['EventBudget'];
 }
 else
 {
   $flag = 1;
   $query = "SELECT events.EventID,EventName,EventBudget,EventDescription,EventFileBanner,ShortDescription,EventDate,OutsideAddress,StartTime,EndTime,OrganizerName,OrganizerEmail,OrganizerContactNumber FROM events join outsiderequest on events.EventID=outsiderequest.EventID 
   JOIN organizer on events.OrganizerID=organizer.OrganizerID  where events.EventID=$eid";
   $result = $conn->query($query);
   if ($result->num_rows > 0) {
   $row = mysqli_fetch_assoc($result);
    
   $eid=$row['EventID'];
   $ename=$row['EventName'];
   $edesc=$row['EventDescription'];
   $esdesc=$row['ShortDescription'];
   $efile=$row['EventFileBanner'];
   $edate=$row['EventDate'];
   $eaddress=$row['OutsideAddress'];
   $estime=$row['StartTime'];
   $eetime=$row['EndTime'];
   $oname=$row['OrganizerName'];
   $onumber=$row['OrganizerContactNumber'];
   $oemail=$row['OrganizerEmail'];
   $ebudget=$row['EventBudget'];
   


 }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>

     <title>Event Details</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link href="img/favicon.png" rel="icon">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
<style>
  .center {
  display: block;
  margin-left: 170px;

 
}
</style>
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

   


     <!-- HERO -->

<?php       
    echo'<section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">
                              <div class="col-md-5"><!--image holder with 5 grid column-->
                              <img src="./image/'. $efile .'" width="350px" height="250px" class="center">
                              </div>
                                    <h6 data-aos="fade-up" data-aos-delay="300" style="color: white;">Organized By '. $oname .'</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">'. $ename .'</h1>
                                    <h6 data-aos="fade-up" data-aos-delay="300" style="color: white;"> '. $esdesc .'</h6>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="500" style="color: white;"> Description: '. $edesc .'</p>
                                    <p data-aos="fade-up" data-aos-delay="500" style="color: red;"> Budget: '. $ebudget .'</p>
                                    <p data-aos="fade-up" data-aos-delay="500" style="color: red;">Event Guests: </p>
                                    <p data-aos="fade-up" data-aos-delay="500" style="color: red;">Event Sponsers:'; ?>   <?php
                                    $que = "SELECT SponsorName
                                    FROM event_sponsers JOIN sponsors on event_sponsers.SponsorID=sponsors.SponsorID where EventID = 7";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_assoc($res))
       {
          echo $row["SponsorName"];
          echo " ";
   
         
       } ?>  <?php
                                     echo'</p>
                                     <p data-aos="fade-up" data-aos-delay="500" style="color: white;">Event Type:'; ?>   <?php
                                     $que = "SELECT EventType
                                     FROM events_eventtype  where EventID = 7";
        $res = mysqli_query($conn,$que);
        while($row = mysqli_fetch_assoc($res))
        {
           echo $row["EventType"];
           echo " ";
    
          
        } ?> 
                           <?php          echo'<p style="color: white;" data-aos="fade-up" data-aos-delay="500">Address: '. $eaddress.'. Event Date: '. date('j F, y',strtotime($edate)).'. Start Time: '. date('h:i:s a ', strtotime($estime)) .' End TIme: '. date('h:i:s a ', strtotime($eetime)) .'</p>
                
                           
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>';
   ?>

     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Contact US
                        
                       
                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#"><?php echo $oemail;  ?></a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i><?php echo $onumber;  ?></p>
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
