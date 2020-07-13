<?php
//start a new session
session_start();

if (isset($_POST["remove_from_cart"])) {
    $servername1 = "localhost";
    $username1 = "root";
    $password1 = "";
    $dbname1 = "cart";

    $conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

    if ($conn1->connect_error) {
        die("Conenction Failed: " . $conn1->connect_error);
    }

    $item = $_POST["hidden_name"];
    $size = $_POST["hidden_size"];
    $price = $_POST["hidden_price"];
    $user = $_SESSION["id"];

    $sql1 = "DELETE FROM item_details WHERE user_id='$user' && item_name='$item' && item_size='$size' && item_price='$price'";

    if ($conn1->query($sql1) === true) {

    } else {
        echo "Error: " . $sql1 . "<br>" . $conn1->error;
    }
}

if (isset($_POST["remove_from_cart_food"])) {
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "cart";

    $cn = new mysqli($sname, $uname, $pass, $db);

    if ($cn->connect_error) {
        die("Connection failed: " . $cn->connect_error);
    }

    $fi = $_POST["hidden_name_food"];
    $fpf = $_POST["hidden_price_full"];
    $fph = $_POST["hidden_price_half"];
    $user = $_SESSION["id"];

    $s1 = "DELETE FROM food_details WHERE user_id='$user' && item_name='$fi' && item_price_full='$fpf' or item_price_half='$fph'";

    if ($cn->query($s1) === true) {

    } else {
        echo "Error: " . $s1 . "<br>" . $cn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Cart</title>

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
<div class="brand">
         <h2 class="nav fas fa-shopping-cart fa-x"  >  Your Shopping Cart</h2>
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
                  <li><a href="food_page.php">Food</a></li>
                  <li><a href="wines_page.php">Wines</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="profile.php">Profile</a></li>
              </ul>
             
            </div>
          </nav>
    </div>
    <br>

    <?php
    // echo $_SESSION["hidden_name"];
    // echo $_SESSION["hidden_price"];
    // echo $_SESSION["hidden_size"];
    // echo $_SESSION["hidden_id"];
    // echo $_SESSION["id"];
    // echo $_SESSION["user"];

    //server and database details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cart";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error) {
        die("Conenction Failed: " . $connect_error);
    }

    $id = $_SESSION["id"];

    //sql to fetch data
    $sql = "SELECT item_name, item_price, item_size FROM item_details WHERE user_id = '$id'";
    

    //execute the query
    $result = $conn->query($sql);
    

    //check the result
    if ($result->num_rows > 0) {
        //output of each row
        while ($row = $result->fetch_assoc()) {
            // echo $row["item_name"];
            // echo $row["item_size"];
            // echo $row["item_price"];
            ?>

            <div class="col-md4">
                <form action="cart.php" method="post">
                    <div style="border:1px solid; padding:16px;">
                    <p><?php echo $row["item_name"];?></p>
                    <p><?php echo "Qty:".$row["item_size"]?></p>
                    <p><?php echo "Price: ₹".$row["item_price"];?></p>
                    <input type="hidden" name="hidden_name" id="hidden_name" value="<?php echo $row["item_name"];?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $row["item_price"]?>">
                    <input type="hidden" name="hidden_size" value="<?php echo $row["item_size"]?>">
                    <input type="submit" name="remove_from_cart" value="Remove">
                    </div>
                </form>
            </div>

            <?php
        }
    } else {
        echo "Your cart is empty";
    }

    $cn1 = new mysqli("localhost", "root", "", "cart");

    $sql1 = "SELECT * FROM food_details WHERE user_id = '$id'";

    $result1 = $cn1->query($sql1);

	//check query execution
	if ($result1->num_rows > 0) {
		//fetch the result in an array
		while ($row1 = $result1->fetch_assoc()) {
            ?>

            <div class="col-md4">
                <form action="cart.php" method="post">
                    <div style="border:1px solid; padding:16px;">
                    <p><?php echo $row1["item_name"];?></p>
                    <p><?php if($row1["item_price_full"]==NULL){
                    } else{echo "Qty: Full <br><br>"; 
                        echo "Price: ₹".$row1["item_price_full"];
                    }?></p>
                    <p><?php if($row1["item_price_half"]==NULL){
                    } else{echo "Qty:Half<br><br>";
                           echo "Price: ₹".$row1["item_price_half"];
                    }?></p>
                    <input type="hidden" name="hidden_name_food" id="hidden_name" value="<?php echo $row1["item_name"];?>">
                    <input type="hidden" name="hidden_price_half" value="<?php echo $row1["item_price_half"]?>">
                    <input type="hidden" name="hidden_price_full" value="<?php echo $row1["item_price_full"]?>">
                    <input type="submit" name="remove_from_cart_food" value="Remove">
                    </div>
                </form>
            </div>

            <?php
        }
    }

    $conn->close();
    ?>
    
</body>
</html>