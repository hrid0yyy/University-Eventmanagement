<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "eventadministration";
$eid = $_GET["eid"];
$rat = $_GET["rat"];
$conn = mysqli_connect($servername,$username,$password,$database);
$flag = 0;

//checking if connection is working or not
//Output Form Entries from the Database
$query = "SELECT events.EventID,EventName,fee,EventDescription,EventGuest,EventFileBanner,EventDate,VenueName,StartTime,EndTime,OrganizerName,OrganizerEmail,OrganizerContactNumber,ShortDescription,OrganizerDescription,OrganizerFileLogo,VenueFileimg,VenueLocation FROM events join request_ on events.EventID=request_.EventID join slot on slot.SlotID=request_.SlotID join venue_ on slot.VenueID=venue_.VenueID
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
    $eguest=$row['EventGuest'];
    $eaddress=$row['VenueName']." ".$row['VenueLocation'];
    $estime=$row['StartTime'];
   $eetime=$row['EndTime'];
   $oname=$row['OrganizerName'];
   $onumber=$row['OrganizerContactNumber'];
   $oemail=$row['OrganizerEmail'];
   $odesc=$row['OrganizerDescription'];
   $ofile=$row['OrganizerFileLogo'];
   $vfile=$row['VenueFileimg'];
   $fee=$row['fee'];
 }
 else
 {
   $flag = 1;
   $query = "SELECT events.EventID,fee,EventName,EventDescription,EventGuest,EventFileBanner,ShortDescription,EventDate,OutsideAddress,StartTime,EndTime,OrganizerName,OrganizerEmail,OrganizerContactNumber,OrganizerDescription,OrganizerFileLogo FROM events join outsiderequest on events.EventID=outsiderequest.EventID 
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
   $eguest=$row['EventGuest'];
   $eaddress=$row['OutsideAddress'];
   $estime=$row['StartTime'];
   $eetime=$row['EndTime'];
   $oname=$row['OrganizerName'];
   $onumber=$row['OrganizerContactNumber'];
   $oemail=$row['OrganizerEmail'];
   $odesc=$row['OrganizerDescription'];
   $ofile=$row['OrganizerFileLogo'];
   $fee=$row['fee'];

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
</style>
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

   




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
                                    <h6 data-aos="fade-up" data-aos-delay="300">Organized By '. $oname .'</h6>

                                    <h2 class="text-white" data-aos="fade-up" data-aos-delay="500">'. $ename .'</h2>
                                    <h6 data-aos="fade-up" data-aos-delay="300"> '. $esdesc .'</h6>
                                    <br>
                                    <p data-aos="fade-up" data-aos-delay="500">'. $edesc .'</p>
                                    <p data-aos="fade-up" data-aos-delay="500">Event Guests: '. $eguest .'</p>
                                    <p data-aos="fade-up" data-aos-delay="500" >Sponsers</p>
                                    <p data-aos="fade-up" data-aos-delay="500">'; ?>   <?php
                                    $que = "SELECT SponsorName,SponsorFileLogo
                                    FROM event_sponsers JOIN sponsors on event_sponsers.SponsorID=sponsors.SponsorID where EventID = $eid";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_assoc($res))
       {
          echo "<img src='./image/". $row['SponsorFileLogo'] ."' width='45px' height='35px' style='border-radius: 50%;' >";
          echo " ";
   
         
       } ?>  <?php
                                     echo'</p>
                                     <p data-aos="fade-up" data-aos-delay="500">Event Type:'; ?>   <?php
                                     $que = "SELECT EventType
                                     FROM events_eventtype  where EventID = $eid";
        $res = mysqli_query($conn,$que);
        while($row = mysqli_fetch_assoc($res))
        {
           echo $row["EventType"];
           echo ", ";
    
          
        } ?> 
                           <?php          echo'<p data-aos="fade-up" data-aos-delay="500">Event Date: '. date('j F, y',strtotime($edate)).'</p>
                                         <p data-aos="fade-up" data-aos-delay="500">Registration Fee: '. $fee.'</p>
                                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm">Registration</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>';

     ?>
                      
 
     <section class="feature" id="feature">
      <br>
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white"  data-toggle="modal" data-target="#volunteershipForm"  data-aos="fade-up">Want to Volunteer?</h2>

                    

                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#volunteershipForm">Become a Volunteer</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>


                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Event Date</strong>

                                <p data-aos="fade-up" data-aos-delay="800"><?php echo date('j F, y',strtotime($edate))  ?></p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Start Time - End Time</strong>

                                <p data-aos="fade-up" data-aos-delay="800"><?php echo date('h:i:s a', strtotime($estime)); echo "-"; echo date('h:i:s a', strtotime($eetime));  ?></p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>

     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-0 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are <?php echo $oname; ?></h2>

                                <p data-aos="fade-up" data-aos-delay="400"><?php  echo $odesc ?></p>

                                <p data-aos="fade-up" data-aos-delay="500">If you have any question regarding <a rel="nofollow"  target="_parent"><?php echo $ename  ?></a>, you can <a rel="nofollow" href="#contact" target="_parent">contact us</a> immediately. Thank you.</p>

                            </div>

                          

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                            <?php   echo'<img src="./image/'. $ofile .'" width="250 px" height="250px" >';  ?>

                                    <div class="team-info d-flex flex-column">

                                       
                                        <span><?php echo $oname  ?></span>
                                       <span> <?php 
                                          if($rat != null) {   
                                            for ($i = 1; $i <= 5; $i++) {
                                             echo "<span  class='star " . (($i <= $rat) ? 'filled' : '') . "'>&#9733;</span>";
                                         }   
                                       } 
                                        ?></span>
                                        <ul class="social-icon mt-0">
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                       
                                    </div>
                                   
                                </div>
                            </div>

                    </div>
               </div>
     </section>


   
     

     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="sid" placeholder="Student ID">

                            <input type="email" class="form-control" name="email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="qus" placeholder="Your Question"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="qsubmit">Send</button>
                            <a href="Faqs.php?eid=<?php echo $eid; ?>"  data-aos="fade-up" data-aos-delay="300" >Other Questions </a>

                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Venue </h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><?php echo $eaddress;  ?></p>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
<?php
if($flag==1){
$address= str_replace(" ","+",$eaddress);
?>
<iframe width="100%" height="300" src="https://maps.google.com/maps?q=<?php

echo $address; ?>&output=embed"></iframe>
<?php

}
else{
echo '<img src="./image/'. $vfile .'" width="450px" height="350px" >';

}


?>
                    </div>
                    
               </div>
          </div>
     </section>


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

    <!-- registration Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Registration Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="#" method="post">
            <input type="text" class="form-control"  name="id" id="id" placeholder="Enter ID"  required>
            <input type="text" class="form-control"  name="pass" id="pass" placeholder="Enter Pass"  required>
            <input class="form-control" type="text" name="fname" id="fname" placeholder="Enter your first name"  required>
			  
        <input class="form-control" type="text" name="lname" id="lname" placeholder="Enter your last name" required >
			  
        <input class="form-control" type="text" name="bg" id="bg" placeholder="Enter your blood group"  >
			  
        <input class="form-control" type="text" name="number" id="number" placeholder="Enter your phone number" required >
			 
        <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email" required>
      
        <input class="form-control" type="text" name="role" id="role" placeholder="Enter your role"  required>
       
                    
                <button type="submit" class="form-control" id="submit-button" name="submit">Register</button>

                
            </form>
                    </div>

          <div class="modal-footer"></div>

        </div>
      </div>
    </div>



    <!-- volunter -->
    <div class="modal fade" id="volunteershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Volunteer Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="#" method="post">
            <input class="form-control"  type="text" name="vid" id="vid" placeholder="Enter ID" required >
			  
        <input class="form-control"  type="text" name="vname" id="vname" placeholder="Enter your name"  required>
			  
        <input class="form-control"  type="text" name="vnumber" id="vnumber" placeholder="Enter your phone number"  required>
			  
        <input class="form-control"  type="email" name="vemail" id="vemail" placeholder="Enter your email"  required>
       
        <input class="form-control"  type="text" name="vrole" id="vrole" placeholder="Enter your designation" required>

                <button type="submit" class="form-control" id="submit-button" name="vsubmit">Submit Button</button>

               
            </form>
          </div>

          <div class="modal-footer"></div>

        </div>
      </div>
    </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
<?php

if(isset($_POST['submit']))
{
  if($flag==0){
  $q= "SELECT EventName
  FROM events join request_ on events.EventID=request_.EventID
              join slot on request_.SlotID=slot.SlotID     
  WHERE events.EventID=$eid AND (EventDate >= CURDATE() + INTERVAL 4 DAY)";
  $r = $conn->query($q);

  if ($r->num_rows > 0) {
    $id= $_POST['id'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $bg= $_POST['bg'];
    $number= $_POST['number'];
    $email= $_POST['email'];
    $role= $_POST['role'];
    $pass= $_POST['pass'];

    $conn = mysqli_connect("localhost","root","","eventadministration") or die($conn);
    $query="SELECT VenueCapacity as capacity,participants
    FROM (SELECT request_.EventID as eid,VenueCapacity
    FROM request_ join slot on request_.SlotID=slot.SlotID
                  JOIN venue_ on slot.VenueID=slot.VenueID
                  
     WHERE request_.EventID = $eid) as ctab 
     JOIN
       (SELECT events.EventID as eid,COUNT(ParticipantID) as participants
    FROM events JOIN registration_ on events.EventID=registration_.EventID
     WHERE events.EventID = $eid) as ptab
     on ctab.eid=ptab.eid";
	 $result = $conn->query($query);
   if ($result->num_rows > 0) {
       
       $row = mysqli_fetch_assoc($result);
      $limit = $row['capacity'];
      $participants = $row['participants'];
   }
     if($limit>$participants){

     
      $sql = "SELECT * FROM `registration_` WHERE EventID = $eid and ParticipantID = $id";
      //fire query
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0)
      {
        echo "<script>alert('You are already registered')</script>";
      
          echo "<script>location.href='details.php?eid=". $eid . "&rat=". $rat . "'</script>";
      }
     else
     {
    
      echo "<script>location.href='payment.php?fee=". $fee . "&id=". $id . "&eid=". $eid . "&rat=". $rat . "&fname=". $fname . "&lname=". $lname . "&email=". $email . "'</script>";
    $sql = "INSERT INTO `participants` (`ParticipantID`, `ParticipantFirstName`, `ParticipantlastName`, `ParticipantEmail`, `ParticipantContactNumber`,`ParticipantBloodGroup`,`ParticipantRole`,`pass`) VALUES ('$id', '$fname', '$lname', '$email','$number','$bg','$role','$pass'); ";
        
    $res = mysqli_query($conn,$sql);
    $sql2 = " INSERT INTO registration_ (`EventID`,`ParticipantID`) VALUES ('$eid','$id');";
    $done = mysqli_query($conn,$sql2);
    
    echo "<script>alert('Registration Successfull')</script>";
     }
     }

     else{
      echo "<script>alert('Sorry, Slot full')</script>";

     }
    }
    
    else
    {
      echo "<script>alert('Deadline is over')</script>";

  
    }
    
     
  }
  else
  {
    $q= "SELECT EventName
    FROM events join outsiderequest on events.EventID=outsiderequest.EventID   
    WHERE events.EventID=$eid AND (EventDate >= CURDATE() + INTERVAL 4 DAY)";
    $r = $conn->query($q);
  
    if ($r->num_rows > 0) {
      $id= $_POST['id'];
      $fname= $_POST['fname'];
      $lname= $_POST['lname'];
      $bg= $_POST['bg'];
      $number= $_POST['number'];
      $email= $_POST['email'];
      $role= $_POST['role'];
      $pass= $_POST['pass'];
      $conn = mysqli_connect("localhost","root","","eventadministration") or die($conn);
      $query="SELECT VenueCapacity as capacity,participants
      FROM (SELECT outsiderequest.EventID as eid,capacity as VenueCapacity
      FROM outsiderequest 

                    
       WHERE outsiderequest.EventID = $eid) as ctab 
       JOIN
         (SELECT events.EventID as eid,COUNT(ParticipantID) as participants
      FROM events JOIN registration_ on events.EventID=registration_.EventID
       WHERE events.EventID = $eid) as ptab
       on ctab.eid=ptab.eid";
     $result = $conn->query($query);
     if ($result->num_rows > 0) {
         
         $row = mysqli_fetch_assoc($result);
        $limit = $row['capacity'];
        $participants = $row['participants'];
     }
       if($limit>$participants){ 

       
        $sql = "SELECT * FROM `registration_` WHERE EventID = $eid and ParticipantID = $id";
        //fire query
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0)
        {
          echo "<script>alert('You are already registered')</script>";
        
            echo "<script>location.href='details.php?eid=". $eid . "&rat=". $rat . "'</script>";
        }
       else
       {
      
        echo "<script>location.href='payment.php?fee=". $fee . "&id=". $id . "&eid=". $eid . "&rat=". $rat . "&fname=". $fname . "&lname=". $lname . "&email=". $email . "'</script>";


      $sql = "INSERT INTO `participants` (`ParticipantID`, `ParticipantFirstName`, `ParticipantlastName`, `ParticipantEmail`, `ParticipantContactNumber`,`ParticipantBloodGroup`,`ParticipantRole`,`pass`) VALUES ('$id', '$fname', '$lname', '$email','$number','$bg','$role','$pass'); ";
          
      $res = mysqli_query($conn,$sql);
      $sql2 = " INSERT INTO registration_ (`EventID`,`ParticipantID`) VALUES ('$eid','$id');";
      $done = mysqli_query($conn,$sql2);
      
      echo "<script>alert('Registration Successfull')</script>";
       }
       }
  
       else{
        echo "<script>alert('Sorry, Slot full')</script>";

       }
      }
      
      else
      {
        echo "<script>alert('Deadline is over')</script>";

    
      }

  }
	
}

if(isset($_POST['vsubmit']))
{
  if($flag==0){
  $q= "SELECT EventName
  FROM events join request_ on events.EventID=request_.EventID
              join slot on request_.SlotID=slot.SlotID     
  WHERE events.EventID=$eid AND (EventDate >= CURDATE() + INTERVAL 4 DAY)";
  $r = $conn->query($q);

  if ($r->num_rows > 0) {
    $vid= $_POST['vid'];
    $vname= $_POST['vname'];
    $vnumber= $_POST['vnumber'];
    $vemail= $_POST['vemail'];
    $vrole= $_POST['vrole'];

    $conn = mysqli_connect("localhost","root","","eventadministration") or die($conn);

   
 
    $sql = "INSERT INTO `volunteers_` (`VolunteerID`, `VolunteerName`, `VolunteerEmail`, `VolunteerContactNumber`, `VolunteerDesignation`) VALUES ('$vid', '$vname', '$vemail','$vnumber','$vrole'); ";
        
    $res = mysqli_query($conn,$sql);
    $sql2 = " INSERT INTO assist (`EventID`,`VolunteerID`) VALUES ('$eid','$vid');";
    $res2 = mysqli_query($conn,$sql2);
    if($res2){
      echo "<script>alert('Registration Successfull')</script>";

      }
    
	
}

else{
  echo "<script>alert('Volunteer Deadline is over')</script>";

}
}

else{

  $q= "SELECT EventName
  FROM events join outsiderequest on events.EventID=outsiderequest.EventID   
  WHERE events.EventID=$eid AND (EventDate >= CURDATE() + INTERVAL 4 DAY)";
  $r = $conn->query($q);

  if ($r->num_rows > 0) {
    $vid= $_POST['vid'];
    $vname= $_POST['vname'];
    $vnumber= $_POST['vnumber'];
    $vemail= $_POST['vemail'];
    $vrole= $_POST['vrole'];

    $conn = mysqli_connect("localhost","root","","eventadministration") or die($conn);

	 

    $sql = "INSERT INTO `volunteers_` (`VolunteerID`, `VolunteerName`, `VolunteerEmail`, `VolunteerContactNumber`, `VolunteerDesignation`) VALUES ('$vid', '$vname', '$vemail','$vnumber','$vrole'); ";
        
    $res = mysqli_query($conn,$sql);
    $sql2 = " INSERT INTO assist (`EventID`,`VolunteerID`) VALUES ('$eid','$vid');";
    $res2 = mysqli_query($conn,$sql2);
    if($res2){
      echo "<script>alert('Registration Successfull')</script>";

      }
    
	
}

else{
  echo "<script>alert('Volunteer Deadline is over')</script>";

}
  
}
}

if(isset($_POST['qsubmit']))
{
  $q= "(SELECT EventName
  FROM events join outsiderequest on events.EventID=outsiderequest.EventID   
  WHERE events.EventID=$eid AND (EventDate >= CURDATE() + INTERVAL 4 DAY))


UNION


(SELECT EventName
  FROM events join request_ on events.EventID=request_.EventID   
              JOIN slot on request_.SlotID=slot.SlotID
  WHERE events.EventID=$eid AND (EventDate >= CURDATE() + INTERVAL 4 DAY))";
  $r = $conn->query($q);

  if ($r->num_rows > 0){



    $sid= $_POST['sid'];
    $qus= $_POST['qus'];
    $email= $_POST['email'];
   
  
    $sql2 = mysqli_query($conn,"INSERT INTO `qa` (`EventID`, `StudentID`, `qus`,`StudentEmail`) VALUES ('$eid', '$sid', '$qus','$email')") or die("Query Failed".mysqli_error($conn));

    if($sql2)
	{
	
		echo "<script>alert('We will answer your qus soon')</script>";

	}
}
else
{

  echo "<script>alert('Deadline is over')</script>";
}
	
	
}


?>