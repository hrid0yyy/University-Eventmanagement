<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "eventadministration";
   $oid = $_GET['oid'];
   $conn = mysqli_connect($servername,$username,$password,$database);
 if(isset($_GET['delete']))
 {
  $pid = $_GET['delete'];
   $sql = "DELETE 
   FROM pollvote
   WHERE PollID=$pid";
   
   $res = mysqli_query($conn,$sql);
   
   $sql2 = "DELETE 
   FROM polloption
   WHERE PollID= $pid";
   
   $res2 = mysqli_query($conn,$sql2);

   $sql3 = "DELETE 
   FROM event_poll
   WHERE PollID= $pid";
   
   $res3 = mysqli_query($conn,$sql3);
   
 }

 if($res3)
 {
    echo "<script>location.href='poll.php?oid=". $oid . "'</script>";
 }



?>