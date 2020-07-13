<?php
session_start();
?>

<!doctype html>
<html>
 <head> 
  <title>profile page</title> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
  <!-- jQuery library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <!-- Popper JS --> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
  <!-- Latest compiled JavaScript --> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
  <link href="https://fonts.googleapis.com/css?family=Bungee Inline" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Alegreya SC" rel="stylesheet"> 

  <link rel="stylesheet" href="profile.css">
   
</head>
<body>
  <div class="profile"> 
   <h2>MY PROFILE</h2> 
   <ul style="list-style-type:none;"> 
    <li style="font-size:25px;">username: <?php echo $_SESSION["user"]?></li> 
    <hr> 
    <li style="font-size:25px;"><a href="cart.php">My order</a></li> 
    <hr> 
    <li style="font-size:25px;">eamil id: <?php echo $_SESSION["email"]?></li> 
    <hr> 
    <li style="font-size:25px;">contact: <?php echo $_SESSION["contact"]?></li> 
   </ul> 
  </div> 
  <div class="settings"> 
   <h2>EDIT PROFILE </h2> 
   <ul style="list-style-type:none;"> 
    <li style="font-size:25px;"><a href="#">change username</a></li> 
    <hr> 
    <li style="font-size:25px;"><a href="#">change password</a></li> 
    <hr> 
    <li style="font-size:25px;"><a href="#">change mail id</a></li> 
   </ul> 
  </div> 
  <div class="privacy"> 
   <h2>PRIVACY SETTINGS</h2> 
   <ul style="list-style-type:none;"> 
    <li style="font-size:25px;"><a href="#">scan profile</a></li> 
    <hr> 
    <li style="font-size:25px;"><a href="#">manage account</a></li> 
    <hr> 
    <li style="font-size:25px;"><a href="#">protect card details</a></li> 
   </ul> 
  </div> 
  <button class="btn btn-outline-primary" type="submit"><a href="logged_in_homepage.php">Home</a></button> 
  <button class="btn btn-outline-primary" type="submit">make changes and save</button>
  <button class="btn btn-outline-primary" type="submit"><a href="logout.php">Logout</a></button> 
 </body>
</html>
