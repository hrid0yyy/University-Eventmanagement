<?php
    //storing database details in variables.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eventadministration";
    
    $conn = mysqli_connect($servername,$username,$password,$database);
	$pid= $_GET['pid'];
	?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Polls V1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link href="img/favicon.png" rel="icon">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<body>
		<div class="wrapper">
			<div class="poll-top-head text-center">
				<h1>Polls</h1>
			</div>
			
			<?php
      
	  $sql="SELECT EventName,Sum(count) as total
	  FROM event_poll join polloption on event_poll.PollID=polloption.PollID 
      where event_poll.PollID = $pid;";
	  $result = mysqli_query($conn, $sql);
     
	  if(mysqli_num_rows($result) > 0)
	  {
		while($row = mysqli_fetch_assoc($result)){
         $total = $row["total"];
				  echo '
			<div class="poll-top-title text-center">
				<h2>'.$row["EventName"].'</h2>
			</div>';
		}
	}
			?> 
			<!-- /poll top content -->
			<div class="poll-content-img clearfix">
				<div class="poll-left-img float-left clearfix">
					<img src="assets/img/plp.png" alt="">
				</div>
				<!-- /pol img -->
				<div class="poll-right-text">
					<form action="#" method="post">


					<?php
      
			$sql="SELECT PollOpt,count FROM event_poll join polloption on event_poll.PollID=polloption.PollID
			where event_poll.PollID=$pid";
			$result = mysqli_query($conn, $sql);
	         $per = array();
             $pollopt = array();
             $i = 0;
			if(mysqli_num_rows($result) > 0)
			{
			  while($row = mysqli_fetch_assoc($result)){
			  $coun =	$row["count"];
			  if($total!=0){
               $per[$i] = ($coun/$total)*100;
			  }
			  else{
				$per[$i]=0;
			  }
             $pollopt[$i]= $row["PollOpt"];
             $i += 1;

            }
        }
                ?>	
                <!-- <?php
				for ($x = 0; $x < $i; $x++){
						echo'<div class="poll-progress-percent">
							<label>
								<input type="radio" name="popt" value="'; ?> <?php echo $pollopt[$x] ?> <?php echo'" class="exp-option-box">
								<span class="checkmark-border position-relative"></span>
								<span class="exp-label">'; ?> <?php echo $pollopt[$x] ?> <?php echo'</span>
							</label>
							<div class="progress">
								<div class="progress-bar" data-percent="'; ?><?php echo $per[$x] ?>  <?php echo'"></div>
							</div>
						</div>';
				}
                     ?> -->
 <div class="poll-progress-percent">
							<label>
								<input type="radio" name="popt" value="<?php echo $pollopt[0] ?>"  class="exp-option-box">
								<span class="checkmark-border position-relative"></span>
								<span class="exp-label"><?php echo $pollopt[0] ?></span>
							</label>
							<div class="progress">
								<div class="progress-bar" data-percent="<?php echo $per[0] ?>"></div>
							</div>
						</div>
                        <div class="poll-progress-percent">
							<label>
								<input type="radio" name="popt" value="<?php echo $pollopt[1] ?>"  class="exp-option-box">
								<span class="checkmark-border position-relative"></span>
								<span class="exp-label"><?php echo $pollopt[1] ?></span>
							</label>
							<div class="progress">
								<div class="progress-bar" data-percent="<?php echo $per[1] ?>"></div>
							</div>
						</div>
                        <div class="poll-progress-percent">
							<label>
								<input type="radio" name="popt" value="<?php echo $pollopt[2] ?>"  class="exp-option-box">
								<span class="checkmark-border position-relative"></span>
								<span class="exp-label"><?php echo $pollopt[2] ?></span>
							</label>
							<div class="progress">
								<div class="progress-bar" data-percent="<?php echo $per[2] ?>"></div>
							</div>
						</div>
		            <div><label class="w3-input" for="ptid">Enter Your Participant ID</label>
						<input class="w3-input" type="text" name="ptid" id="ptid">
						<label class="w3-input" for="ptpass">Enter Your Password</label>
						<input class="w3-input" type="text" name="ptpass" id="ptpass">
					</div>
					<br>
						<button type="submit" name="submit" class="btn btn-primary">Submit vote</button>
					</form>

				
				</div>
				<!-- /poll progress -->
			</div>
		</div>
		<!-- /wrapper -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/appear.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>	
	</body>


	</html>

    <?php
 if(isset($_POST['submit']))
{
	$ptid = $_POST['ptid'];
	$ptpass = $_POST['ptpass'];
    $popt= $_POST['popt'];
  $query="SELECT count
  FROM polloption
  where PollOpt = '$popt' and PollID=$pid";
  
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result)){
            $c = $row["count"];
    }
}



$query="SELECT *
FROM participants
WHERE ParticipantID=$ptid and pass = $ptpass";
  
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
 {
	$query="SELECT *
FROM pollvote
WHERE ParticipantID = $ptid and PollID =$pid";
  
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
 {
	echo "<script>alert('You already gave your vote')</script>";
    echo "<script>location.href='viewpoll.php'</script>";
 }
 else
 {
	$sql="INSERT INTO `pollvote` (`PollID`, `ParticipantID`, `PollOpt`) VALUES ('$pid', '$ptid', '$popt');";
	$r = mysqli_query($conn, $sql);

	$c += 1;
	$sql="Update polloption
   set count='$c'
   where PollOpt = '$popt' and PollID= $pid ";
   $r = mysqli_query($conn, $sql);
   if($sql){
	echo "<script>alert('Thanks for your vote')</script>";
   echo "<script>location.href='viewpoll.php'</script>";
   }

 }
 }
 else{
	echo "<script>alert('Wrong credential!')</script>";
 }









    
    

  
	
    }	


?> 
