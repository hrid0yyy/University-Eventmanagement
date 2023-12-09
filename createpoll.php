<?php

    include 'functions.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Poll</title>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='' name='keywords'>
  <meta content='' name='description'>

  
  <link href='img/favicon.png' rel='icon'>
  <link href='img/apple-touch-icon.png' rel='apple-touch-icon'>

  
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700' rel='stylesheet'>

  
  <link href='lib/bootstrap/css/bootstrap.min.css' rel='stylesheet'>

  
  <link href='lib/font-awesome/css/font-awesome.min.css' rel='stylesheet'>
  <link href='lib/animate/animate.min.css' rel='stylesheet'>
  <link href='lib/ionicons/css/ionicons.min.css' rel='stylesheet'>
  <link href='lib/owlcarousel/assets/owl.carousel.min.css' rel='stylesheet'>
  <link href='lib/lightbox/css/lightbox.min.css' rel='stylesheet'>
  <link rel='stylesheet' href='assets/bootstrap-v3/css/bootstrap.css'>
  <link rel='stylesheet' href='assets/bootstrap-v3/css/bootstrap.css'>
  <link rel='stylesheet' href='//fonts.googleapis.com/icon?family=Material+Icons' />
  <link href='css/style.css' rel='stylesheet'>
  <style>
        body{
          background: url("img/prev.jpg");
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
    </style>    
</head>
<body background='img/black.jpg' style='background-size: cover; background-repeat: no-repeat;'>
	
	<header id='header'>
    <div class='container-fluid'>

      <div id='logo' class='pull-left'>
        <h1><a href='#intro' class='scrollto'>Organizer Panel</a></h1>
      </div>
      <?php	
  $oid = $_GET["oid"];
    echo" <nav id='nav-menu-container'>
        <ul class='nav-menu'>
          
          <li class='menu-active'><a href='welcomeorganizer.php?oid=". $oid . "'>Organizer Home</a></li>   
          <li><a href='addevent.php?oid=". $oid . "'>Request event</a></li>
          <li><a href='createpoll.php?oid=". $oid . "'>Create Poll</a></li>
		  <li><a href='logout2.php'>Logout</a></li>
        </ul>
      </nav>";

      ?>
    </div>
	</header>	

  <br><br> <br> <br> <br>
  <?=template_header('Create Poll')?>
  <div class="content update">
	<h2>Create Poll</h2>
    <form action="#" method="post">
        <label for="title">Event name</label>
        <input type="text" name="title" id="title" placeholder="Title" required>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Description">
        <label for="answers">Poll Option Per Line (per line)</label>
        <textarea name="answers" id="answers" placeholder="give 3 options" required></textarea>
        <input type="submit" value="Create" name="submit">
    </form>

   
     

</div>

<?=template_footer()?>
  <?php
$pdo = pdo_connect_mysql();

if (isset($_POST['submit'])) {
    // Post data not empty insert a new record
    // Check if POST variable "title" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['title']) ? $_POST['title'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    // Insert new record into the "polls" table
    $stmt = $pdo->prepare('INSERT INTO event_poll (OrganizerID,EventName, Description ) VALUES (? ,?, ?)');
    $stmt->execute([ $oid, $name, $description ]);
    // Below will get the last insert ID, this will be the poll id
    $poll_id = $pdo->lastInsertId();
    // Get the answers and convert the multiline string to an array, so we can add each answer to the "poll_answers" table
    $answers = isset($_POST['answers']) ? explode(PHP_EOL, $_POST['answers']) : '';
    foreach($answers as $answer) {
        // If the answer is empty there is no need to insert
        if (empty($answer)) continue;
        // Add answer to the "poll_answers" table
        $stmt = $pdo->prepare('INSERT INTO polloption (PollID, PollOpt,count) VALUES (?, ?,0)');
        $stmt->execute([ $poll_id, $answer ]);
    }

    echo "<script>alert('Poll Created Successfull')</script>";
		echo "<script>location.href='createpoll.php?oid=". $oid . "'</script>";
  
    // Output message
    
}
?>




    
</body>
</html>