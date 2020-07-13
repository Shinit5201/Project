<!doctype html>
<html>
<head> 
  <title>Wine&Dine</title>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
  <link href="https://fonts.googleapis.com/css?family=Diplomata SC" rel="stylesheet"> 
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> 

  <link rel="stylesheet" href="home_page.css">
  
</head> 
<body> 
<div id="main">
<style>
  nav{
    margin: 0px;
    padding-top: 0px;
    background-color: black;
}
ul.navbar-nav{
    padding-left: 0px;
    color: white;
}
#logo{
    color: white;
}
#header{
    margin-top:10px;
    color: white;
    align: center;
    margin-left: 500px;
}
#header4{
    color: white;
    align: center;
    margin-left: 550px;
}
#new{
    float: center;
    padding-left: 15px;
}
#white{
    color: white;
}
</style>
                            
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
        <span id="logo" style="  font-size:35px;cursor:pointer,font-weight:900" onclick="openNav()">☰ </span> 
        <h1 id="header" style="text-align:center;color:white;">Wine&Dine</h1>
        <h4 id="header4"><i id="new" class="fas fa-user-circle"></i><br><a id='white' href="profile.php"><?php session_start(); echo$_SESSION["user"]?></a></h4>
            </div>
          </nav>
    </div>
        <div id="mySidenav" class="sidenav"> 
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a> 
            <a href="#">About</a> 
            <button class="dropdown-btn">Services <i class="fa fa-caret-down"></i> </button> 
            <div class="dropdown-container"> 
                <a href="food_page.php">Food</a> 
                <a href="wines_page.php">Alcohol</a> 
            </div> 
            <a href="#">Contact</a> 
            <a href="profile.php">Profile</a>
            <a href="cart.php">My Cart</a>
            <a href="logout.php">Logout</a>
        </div> 
        <div class="container mt-3"> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators --> 
                <ul class="carousel-indicators"> 
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
                    <li data-target="#myCarousel" data-slide-to="1"></li> 
                    <li data-target="#myCarousel" data-slide-to="2"></li> 
                </ul> 
                <div class="carousel-inner"> 
                    <div class="carousel-item active"> 
                        <img src="food1.jpg" class=" thumbnail  " alt="Los Angeles"> 
                    </div> 
                    <div class="carousel-item"> 
                        <img src="food3.jpeg" class=" thumbnail" alt="Chicago"> 
                    </div> 
                    <div class="carousel-item"> 
                        <img src="food5.jpg" class="  thumbnail" alt="New York"> 
                    </div> 
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> 
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> 
                </div> 
            </div> 
            <h1 style=" text-shadow:5px 5px 10px blue;text-size:50px  " class=" text-center text-capitalize pt-5">Why Wine&Dine</h1> 
            <div style=" text-shadow:5px 5px 10px black;text-size:50px  " class="container"> 
                <ul> 
                    <li>GOOD QUALITY <i class="fas fa-pizza-slice"></i></li> 
                    <li> QUICK DELIVERY <i class="fas fa-car"></i> </li> 
                    <li>REASONABLE RATES<i class="fa fa-bars"></i> </li> 
                </ul> 
            </div> 
            <!--card ends here--> 
            <div id="demo" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators --> 
                <ul class="carousel-indicators"> 
                    <li data-target="#demo" data-slide-to="0" class="active"></li> 
                    <li data-target="#demo" data-slide-to="1"></li> 
                    <li data-target="#demo" data-slide-to="2"></li> 
                </ul> 
                <!-- The slideshow --> 
                <div class="carousel-inner"> 
                    <div class="carousel-item active"> 
                        <img src="wine1.jpg" class="thumbnail" alt="Los Angeles" width="1100" height="500"> 
                    </div> 
                <div class="carousel-item"> 
                <img src="wine4.jpg" class="thumbnail" alt="Chicago" width="1100" height="500"> 
            </div> 
            <div class="carousel-item"> 
                <img src="wine5.jpg" class="thumbnail" alt="New York" width="1100" height="500"> 
            </div>  
        </div> 
        <!-- Left and right controls --> 
        <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> 
        <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> 
        </div> 
   </div> 
   <div class="modal" id="mymodal"> 
    <div class="modal-dialog modal-dialog-centered"> 
     <div class="modal-contnent "> 
      <div class="modal-content"> 
       <!--header part--> 
       <!--Modal body--> 
       <div class="modal-body"> 
        <div class="container"> 
         <form action="signup.php" method="post"> 
          <label for="usrname"> Username</label> 
          <input type="text" id="usrname" name="usrname" required> 
          <label for="psw">Password</label> 
          <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
          <label for="contact">contactno</label> 
          <input type="mobile number" id="contact" name="contact"> 
          <br> 
          <input type="checkbox" name="reminder">REMEMBER ME 
          <button type="submit" class="btn btn-success">SIGN-IN</button> 
         </form> 
        </div> 
       </div> 
       <div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <br> 
   <br> 
   <div class="alert alert-info alert-dismissible"> 
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>30% OFF on first order...</strong>order now! 
    <i class="fas fa-coffee"></i> 
   </div> 
   <!-- </form>  -->
   </div> 
   <div> 
    <div class="col"></div> 
    <br> 
    <div class="container"> 
     <h1 style=" text-shadow:5px 5px 10px blue;text-size:30px  " class="text-center text-capitalize">ORDER NOW</h1> 
     <hr class="w-25 mx-auto pb-5"> 
     <div class="row mb-5"> 
      <div class="col-lg-6 col-md-6 col-12"> 
      </div> 
      <div class="steps"> 
       <p>STEP 1:Login through the above link <i class="fa fa-hand-o-up" style="font-size:30px"></i></p><br> 
       <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRZzy31jCWeQkNM8G9VdPp9neBLzMoaZmIL5g&amp;usqp=CAU" width="100%" height="100%"><br> 
      </div> 
      <br> 
      <div class="steps"> 
       <p>STEP 2:Place Order <i class="fas fa-hamburger" style="font-size:30px"></i> </p><br> 
       <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSc9H7-uiifr2VxE9ePvIvWlZzSFcBNNGha3g&amp;usqp=CAU " width="100%" height="100%"><br>  
      </div> 
      <br> 
      <div class="steps"> 
       <p>STEP 3: Enter your payment details <i class="fab fa-amazon-pay" style="font-size:30px"></i></p><br>  
       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQDzVH99pqJ9tN8H_fm_RMWEfuNcloj38MXbg&amp;usqp=CAU" width="100%" height="100%"><br> 
      </div> 
     </div> 
     <br> 
     <br>
     <div class="alert"> 
      <div class="alert alert-success alert-dismissible"> 
       <button type="button" class="close" data-dismiss="alert">×</button> 
       <strong>Success!</strong> Indicates a successful or positive action. 
      </div> 
      <div class="alert alert-info alert-dismissible"> 
       <button type="button" class="close" data-dismiss="alert">×</button> 
       <strong>Success!</strong> Indicates a successful or positive action. 
      </div> 
      <div class="alert alert-primary alert-dismissible"> 
       <button type="button" class="close" data-dismiss="alert">×</button> 
       <strong>Success!</strong> Indicates a successful or positive action. 
      </div> 
     </div> 

     <script src="home_page.js"></script>
     
     
    </div> 
   </div> 
   <div class="glow"> 
    <h5> DIAL US <i class="fa fa-phone"></i> </h5> contact:263883839 
    <br> contact:263673774 
   </div> 
   <br> 
   <div class="review"> 
    <h6 style="  font-weight: bold;" class="text-center text-capitalize pt-5">REVIEW BY XYZ ORGANIZATION 2019</h6> 
    <div class="progress"> 
     <h6>service</h6> 
     <div class="progress-bar" style="width:80%"></div> 
    </div> 
    <br> 
    <div class="progress"> 
     <h6>quality</h6> 
     <div class="progress-bar" style="width:80%"></div> 
    </div> 
    <br> 
    <div class="progress"> 
     <h6>price</h6> 
     <div class="progress-bar" style="width:90%"></div> 
    </div> 
    <br> 
   </div> 
  </div> 
</body>
</html>