<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eventadministration";
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $eid= $_GET['eid'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Get your feedback</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;
background:#eee;
}

.contact-area {
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
}

@media only screen and (max-width:768px) {
    .contact {
        margin-bottom: 60px;
    }
}

.contact input {
    background: #fff;
    border: 1px solid #fff;
    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #232434;
    font-size: 16px;
    height: 60px;
    padding: 10px;
    width: 100%;
    font-family: 'poppins', sans-serif;
    padding-left: 30px;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.contact textarea {
    background: #fff;
    border: 1px solid #fff;
    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #232434;
    font-size: 16px;
    padding: 10px;
    width: 100%;
    font-family: 'poppins', sans-serif;
    padding-left: 30px;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.contact input:focus {
    background: #fff;
    border: 1px solid #fff;
    color: #232434;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: 0 none;
}

.contact textarea:focus {
    background: #fff;
    border: 1px solid #fff;
    color: #232434;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: 0 none;
}

.form-control::placeholder {
    color: #232434;
    opacity: 1;
}

.btn-contact-bg {
    border-radius: 30px;
    color: #fff;
    outline: medium none !important;
    padding: 15px 27px;
    text-transform: capitalize;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    background: #7564e5;
    font-family: 'poppins', sans-serif;
    cursor: pointer;
    width: 100%;
}

.btn-contact-bg:hover,
.btn-contact-bg:focus {
    background: #232434;
    color: #fff;
}

/*START ADDRESS*/

.single_address {
    overflow: hidden;
    margin-bottom: 10px;
    padding-left: 40px;
}

@media only screen and (max-width:768px) {
    .single_address {
        padding-left: 0px;
    }
}

.single_address i {
    background: #f6f6f6;
    color: #7564e5;
    border-radius: 30px;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    float: left;
    margin-right: 14px;
    font-size: 22px;
    -webkit-box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.single_address:hover i {
    background: #7564e5;
    color: #fff;
}

.single_address h4 {
    font-size: 18px;
    margin-bottom: 0px;
    overflow: hidden;
    font-weight: 600;
}

.single_address p {
    overflow: hidden;
    margin-top: 5px;
}

.section-title h1 {
    font-size: 44px;
    font-weight: 500;
    margin-top: 0;
    position: relative;
    text-transform: capitalize;
    margin-bottom: 15px;
}
.section-title p {
    padding: 0 10px;
    width: 70%;
    margin: auto;
    letter-spacing: 1px;
}
.section-title {
    margin-bottom: 60px;
}
.text-center {
    text-align: center!important;
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div id="contact" class="contact-area section-padding">
<div class="container">
<div class="section-title text-center">
<h1>Help the organizers with your opinion</h1>
</div>
<div class="row">
<div class="col-lg-7">
    
<div class="contact">
<form class="form" name="enq" method="post" action="#" >
<div class="row">
<div class="form-group col-md-6">
<input type="text" name="pid" class="form-control" placeholder="Enter your Participant ID" required="required">
</div>
<div class="form-group col-md-6">
<input type="text" name="ppass" class="form-control" placeholder="Enter your Password" required="required">
</div>
<div class="form-group col-md-12">
<label for="rating">Your Rattings</label>
  <select name="rating" id="rating">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
</div>
<div class="form-group col-md-12">
<textarea rows="6" name="comments" class="form-control" placeholder="Your opinion" required="required"></textarea>
</div>
<div class="col-md-12 text-center">
<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-contact-bg" title="Submit!">Send Feedback</button>
</div>
</div>
</form>
</div>
</div>

<?php
if(isset($_POST['submit']))
{
    $eid= $_GET['eid'];
    $rating= $_POST['rating'];
    $pid= $_POST['pid'];
    $ppass= $_POST['ppass'];
    $comments= $_POST['comments'];
     
    
    
    $sql9 = "SELECT * 
    FROM participants
    WHERE ParticipantID= $pid and pass='$ppass'";
    $r9 = mysqli_query($conn, $sql9);
    if(mysqli_num_rows($r9) == 0)
    {
        echo "<script>alert('Wrong Credentials Try Again!')</script>";
		echo "<script>location.href='feedback.php?eid=". $eid ."'</script>";
    
     }
     else{



    $sql2 = "SELECT *
    FROM registration_
    WHERE ParticipantID = $pid and EventID = $eid";
    $r = mysqli_query($conn, $sql2);
    if(mysqli_num_rows($r) == 0)
    {
        echo "<script>alert('Sorry we cant take your feedback')</script>";
		echo "<script>location.href='home.php'</script>";
    
     }
     


    $sql1 = "SELECT * 
    FROM feedback_ JOIN participants
         on feedback_.Pid=participants.ParticipantID
    where feedback_.EventID=$eid and feedback_.Pid=$pid";
    $result = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result) > 0)
    {
        echo "<script>alert('You already gave your feedback')</script>";
		echo "<script>location.href='home.php'</script>";
    
     }
    else{
    
   $sql = "INSERT INTO `feedback_` (`Rating`, `Comments`, `EventID`, `Fid`, `Pid`) VALUES ('$rating', '$comments', '$eid', NULL, '$pid');";
   $res = mysqli_query($conn,$sql);
   if($sql)
	{
	
		echo "<script>alert('Successfull')</script>";
		echo "<script>location.href='home.php'</script>";

	}
}

}
}
?>


<div class="col-lg-5">
<div class="single_address">
<i class="fa fa-map-marker" ></i>

<h4>Our Address</h4>
<p>United City, Madani Avenue, Badda, Dhaka 1212</p>
</div>
<?php

    $address = 'UIU united city';
    $address= str_replace(" ","+",$address);
    ?>
    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php
    echo $address; ?>&output=embed"></iframe>
    <?php
    
    


?>

<div class="single_address">
    <br> 
<i class="fa fa-envelope"></i>
<h4>Send your message</h4>
<?php
 
 $sql = "SELECT OrganizerContactNumber,OrganizerEmail FROM organizer join events on events.OrganizerID=organizer.OrganizerID where EventID=$eid";
 $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows($result) > 0)
 {
    while($row = mysqli_fetch_assoc($result)){ 
   echo '
<p><a href="#" class="__cf_email__" data-cfemail="e7ae898188a7829f868a978b82c984888a">'. $row["OrganizerEmail"] .'</a></p>
</div>
<div class="single_address">
<i class="fa fa-phone"></i>
<h4>Call us on</h4>


    <p>'. $row["OrganizerContactNumber"] .'</p>';

    }
}

?>
</div>
<div class="single_address">
<i class="fa fa-clock-o"></i>
<h4>Work Time</h4>
<p>Sat - Wed: 08.00 - 16.00. </p>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>

</body>
</html>