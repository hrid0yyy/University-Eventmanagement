<?php

include('connect.php');
$oid = $_GET['oid'];
if(isset($_POST['view'])){

// $con = mysqli_connect("localhost", "root", "", "notif");

if($_POST["view"] != '')

{
   $update_query = "UPDATE notice SET view = 1 WHERE view=0 and OrganizerID = $oid";
   mysqli_query($con, $update_query);
}

$query = "SELECT events.EventName as EventName,time,events.EventID as eid,events.OrganizerID as oid FROM `notice` join events on events.EventID=notice.EventID where events.OrganizerID = $oid and reply is null ORDER BY `notice`.`time` DESC ;";
$result = mysqli_query($con, $query);
$output = '';

if(mysqli_num_rows($result) > 0)
{

while($row = mysqli_fetch_array($result))

{

  $output .= '
  <li>
  <a href="noticeboard.php?oid='.$row['oid'].'&eid='.$row['eid'].'&time='.$row['time'].'">
  <strong>'.$row["EventName"].'</strong><br />
  <small><em>'.$row["time"].'</em></small>
  </a>
  </li>

  ';
}
}

else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}

$status_query = "SELECT * FROM notice WHERE view=0 and OrganizerID = $oid";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);

$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);

echo json_encode($data);
}
?>