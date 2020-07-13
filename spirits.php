<?php
//start a new session
session_start();

//server and database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "liquor_rates";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if (isset($_POST["add_to_cart"])) {
    $_SESSION["hidden_name"] = $_POST["hidden_name"];
    $_SESSION["hidden_price"] = $_POST["hidden_price"];
    $_SESSION["hidden_size"] = $_POST["hidden_size"];
    $_SESSION["hidden_id"] = $_POST["hidden_id"];

    //inserting the data into the database

    //creating a new connection to the cart database
    $server = "localhost";
    $uname = "root";
    $pass = "";
    $db = "cart";

    //create connection
    $connection = new mysqli($server, $uname, $pass, $db);

    //check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $id = $_SESSION["id"];
    $hn = $_SESSION["hidden_name"];
    $hs = $_SESSION["hidden_size"];
    $hp = $_SESSION["hidden_price"];

    //sql to insert data
    $q = "INSERT INTO item_details (user_id, item_name, item_size, item_price)
        VALUES ('$id', '$hn', '$hs', '$hp')";

    //execute the query
    if ($connection->query($q) === true) {
        
    } else {
        echo "Error: " . $q . "<br>" . $connection->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Wines</title>

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

<div class="brand">
         <h2 class="nav fas fa-beer"  >  wineers</h2>
     </div>                              
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <a class="navbar-brand fas fa-beer"  href="#">wineers</a> -->
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="logged_in_homepage.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link Contact" href="#">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">LOGIN</a>
                  </li>
              </ul> -->

              <ul>
                  <li><a href="logged_in_homepage.php">Home</a></li>
                  <li><a href="wines_page.php">Alcohol</a></li>
                  <li><a href="food_page.php">Food</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="profile.php">Profile</a></li>
                  <li><a href="cart.php">Cart</a></li>
              </ul>
             
            </div>
          </nav>
    </div>
    <?php
    //create sql query
    $sql = "SELECT Id, Brand_Name, Size, image, MRP FROM spirits";
    //execute query
    $result = $conn->query($sql);
    //validate result
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>

            <div class="col-md4">
                <form action="spirits.php" method="post">
                    <div style="border:1px solid; padding:16px;">
                    <p><?php echo '<img style="width: 100px;" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'?></p>
                    <p><?php echo $row["Brand_Name"];?></p>
                    <p><?php echo $row["Size"]?></p>
                    <p><?php echo $row["MRP"];?></p>
                    <input type="hidden" name="hidden_name" id="hidden_name" value="<?php echo $row["Brand_Name"];?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $row["MRP"]?>">
                    <input type="hidden" name="hidden_size" value="<?php echo $row["Size"]?>">
                    <input type="hidden" name="hidden_id" value="<?php echo $row["Id"]?>">
                    <input type="submit" name="add_to_cart" value="Add to cart">
                    </div>
                </form>
            </div>

            <?php
        }
    }
    ?>
    
</body>
</html>