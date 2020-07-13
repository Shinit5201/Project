<!DOCTYPE html>

<?php
//start a new session
session_start();

//serever and database details
$server1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname1 = "food_information";

//create a connection
$conn1 = new mysqli($server1, $username1, $password1, $dbname1);

//check connection
if ($conn1->connect_error) {
  die("Connection Failed: " . $conn1->connect_error);
}

if (isset($_POST["add_to_cart"])) {
  $_SESSION[""];
}
?>

<html>
<head>
	<title>Food</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="wines_page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
</head>
<body>

                                  <!-- nav-bar  -->
                                  <div class="brand">
         <h2 class="nav fas fa-beer"  >  FOODIES</h2>
     </div>
     <style>
  nav{
    padding-top: 0px;
    background-color: rgb(51, 51, 51);
}
ul.navbar-nav{
    padding-left: 250px;
    color: white;
}

</style>                              
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <a class="navbar-brand fas fa-beer"  href="#">wineers</a> -->
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul>
              <li><a href="logged_in_homepage.php">Home</a></li>
                  <li><a href="food_page.php">Food</a></li>
                  <li><a href="wines_page.php">Wines</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="profile.php">Profile</a></li>
              </ul>
            </div>
          </nav>
    </div>
              <!--search bar-->
<style>
       body{
         
         background: white;
       }
       *{
      box-sizing: border-box;   
         
       }
 form.search input[type=text] {
  margin-top: 10px;
  margin-left: 20px;
  padding: 10px;
  font-size: 17px;
  border: 1px solid black;
  float: left;
  width: 87%;
  height: 45px;
  background: #f1f1f1;
}



body, html {
  height: 100%;
  
  margin: 0;
}

#btn-group button {
  margin-top: 10px;
  background-color: rgb(51, 51, 51); 
  border: 50px white; 
  color: white; 
  padding: 10px 24px;
  height: 45px;
  cursor: pointer; 
  float: left;
}


#btn-group:after {
  content: "";
  clear: both;
  display: table;
}

#btn-group button:not(:last-child) {
  border-right: none; 
}
 #btn-group button:hover {
  background-color: rgb(51, 51, 51);
}
a.nav-link{
  color: white;
  padding: 0px;
}       
 </style> 
</style>
	<div id="btn-group">
	<form class="search" method="post" action="food_search.php">
		<input type="text" name="search" id="search">
    <button id="same" type="submit" name="submit" value="search"><i class="fa fa-search"></i></button>
    <button id="same"><a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i></a></button>
	</form>
</div>
</body>
<?php
//server and database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_information";
$str=$_POST["search"];

$conn = new mysqli($servername, $username, $password, $dbname);
	//check connection
if ($conn->connect_error) {
		die("Connection Failed");
}
$sql = "SELECT ITEMS,FULL,HALF FROM menu WHERE ITEMS REGEXP g '^$str'";

$result = $conn->query($sql);
if (isset($_POST["submit"])) {
	//fetch the items to be searched
	$str = $_POST["search"];
	//connect to the database
	$conn = new mysqli($servername, $username, $password, $dbname);
	//check connection
	if ($conn->connect_error) {
		die("Connection Failed");
	}

	$sql = "SELECT ITEMS,FULL,HALF  FROM menu WHERE ITEMS REGEXP '^$str'";
	//execute query
	$result = $conn->query($sql);

	//check query execution
	if ($result->num_rows > 0) {
		//fetch the result in an array
		while ($row = $result->fetch_assoc()) {
            ?>


			<!-- displaying the result -->

        <div class="col-md4">
                <form action="food_display.php" method="post">
                    <div style="border:1px solid; padding:16px;">
                    <p><?php echo $row["ITEMS"];?></p>
                    <p>Full: ₹<?php echo $row["FULL"] ?>  <button name="add_to_cart_full"><i class="fa fa-cart-plus"></i></button></p>
                    <p>Half: ₹<?php echo $row["HALF"]?>  <button name="add_to_cart_half"><i class="fa fa-cart-plus"></i></button></p>
                    <input type="hidden" name="hidden_name" id="hidden_name" value="<?php echo $row["ITEMS"];?>">
                    <input type="hidden" name="hidden_price_full" value="<?php echo $row["FULL"]?>">
                    <input type="hidden" name="hidden_price_half" value="<?php echo $row["HALF"]?>">                    
                    </div>
                </form>
            </div>

			<?php
		}
	} else {
		echo "0 results found";
	}

	$conn->close();
}
?>



</html>