<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'eventadministration';
    
    $conn = mysqli_connect($servername,$username,$password,$database);
   $eid = $_GET['eid'];
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>Faq page list - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style type="text/css">
      body {
        margin-top: 20px;
        background: url("img/prev.jpg");
      }
      .m-b-sm {
        margin-bottom: 10px;
      }
      /* FAQ */
      .faq-item {
        padding: 20px;
        margin-bottom: 2px;
        background: #fff;
      }
      .faq-question {
        font-size: 18px;
        font-weight: 600;
        color: #1ab394;
        display: block;
      }
      .faq-question:hover {
        color: #179d82;
      }
      .faq-answer {
        margin-top: 10px;
        background: #f3f3f4;
        border: 1px solid #e7eaec;
        border-radius: 3px;
        padding: 15px;
      }
      .faq-item .tag-item {
        background: #f3f3f4;
        padding: 2px 6px;
        font-size: 10px;
        text-transform: uppercase;
      }
      .ibox {
        clear: both;
        margin-bottom: 25px;
        margin-top: 0;
        padding: 0;
      }
      .ibox.collapsed .ibox-content {
        display: none;
      }
      .ibox.collapsed .fa.fa-chevron-up:before {
        content: "\f078";
      }
      .ibox.collapsed .fa.fa-chevron-down:before {
        content: "\f077";
      }
      .ibox:after,
      .ibox:before {
        display: table;
      }
      .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background-color: #ffffff;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 3px 0 0;
        color: inherit;
        margin-bottom: 0;
        padding: 14px 15px 7px;
        min-height: 48px;
      }
      .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
      }
      .ibox-footer {
        color: inherit;
        border-top: 1px solid #e7eaec;
        font-size: 90%;
        background: #ffffff;
        padding: 10px 15px;
      }
      /* WRAPPERS */
      #wrapper {
        width: 100%;
        overflow-x: hidden;
      }
      .wrapper {
        padding: 0 20px;
      }
      .wrapper-content {
        padding: 20px 10px 40px;
      }
      #page-wrapper {
        padding: 0 15px;
        min-height: 568px;
        position: relative !important;
      }
      @media (min-width: 768px) {
        #page-wrapper {
          position: inherit;
          margin: 0 0 0 240px;
          min-height: 2002px;
        }
      }
    </style>
  </head>
  <body>
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Ask your question
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#" method="post">
              <div class="form-group">
                <label class="label" for="sid" style="color:black;">Student ID</label>
                <input
                  type="text"
                  class="form-control"
                  id="sid"
                  name="sid"
                  placeholder="Enter your student ID"
                />
              </div>
              <div class="form-group">
                <label class="label" for="email" style="color:black;">Student Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your email"
                  required
                />
              </div>
              <div class="form-group">
                <label class="label" for="qus" style="color:black;">Question</label>
                <input
                  type="text"
                  class="form-control"
                  id="qus"
                  name="qus"
                  placeholder="Enter your question"
                  required
                />
              </div>

              <button class="btn btn-primary" id="submit" name="submit">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content m-b-sm border-bottom">
              <div class="text-center p-lg">
                <h4>
                <?php
$query = "SELECT *
FROM events JOIN organizer on events.OrganizerID=organizer.OrganizerID
where EventID=$eid";
$result2 = mysqli_query($conn,$query);
  if(mysqli_num_rows($result2) > 0)
  {
  while($row = mysqli_fetch_assoc($result2)){

   echo '<p>Ask our experienced '. $row["OrganizerName"] .' team your question about the '. $row["EventName"] .' Event </p>';

  }
}

?>
                </h2>
    
                <button
                  title="Ask your question"
                  class="btn btn-primary btn-sm"
                  data-toggle="modal"
                  data-target="#exampleModal"
                >
                  <i class="fa fa-plus"></i>
                  <span class="bold">Add question</span>
                </button>
              
              </div>
            </div>
<br>
 <?php
   $sql = "SELECT * FROM `qa` where EventID = '$eid' and ans is not null";

   $result = mysqli_query($conn,$sql);
   if(mysqli_num_rows($result) > 0)
   {
   while($row = mysqli_fetch_assoc($result)){
             
        echo "<div class='faq-item'>
        <div class='row'>
          <div class='col-md-7'>
            <a data-toggle='collapse'  class='faq-question'
              >". $row['qus'] ."</a
            >
            <medium
              >". $row['ans'] ."</medium>
          </div>
        </div>
      </div>
      <br>";


   }
}
 ?>           
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>
<?php

if(isset($_POST['submit']))
{
    $sid= $_POST['sid'];
    $qus= $_POST['qus'];
    $email= $_POST['email'];
   
  
    $sql2 = mysqli_query($conn,"INSERT INTO `qa` (`EventID`, `StudentID`, `qus`,`StudentEmail`) VALUES ('$eid', '$sid', '$qus','$email')") or die("Query Failed".mysqli_error($conn));

    if($sql2)
	{
	
		echo "<script>alert('We will answer your qus soon')</script>";
        echo "<script>location.href='home.php'</script>";

	}
	
	
}
?>