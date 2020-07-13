<!DOCTYPE html>
<html lang="en">
<head>
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
         <h2 class="nav fas fa-beer"  >  Wineers</h2>
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
	<form class="search" method="post" action="wines_search.php">
		<input type="text" name="search" id="search">
    <button id="same" type="submit" name="submit" value="search"><i class="fa fa-search"></i></button>
    <button id="same"><a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i></a></button>
	</form>
</div>
                                       <!-- background Video -->
    <div>
        <h2 class="heading1">ALWAYS <br>BUY<br> WINES FROM <br> EXPERTS</h2>
        <h4 class="heading2">If you are ready </h4>
        <form method="post" action="wines_display.php">
        <input type="submit" class="btn btn-secondary btn1" value="Let's Explore">Let's Explore</input>
        </form>
        <video autoplay muted loop id="myVideo">
            <source src="Untitled design (1).mp4" >
          </video>
    </div>
       <!-- SIMPLIFY DRINKING  -->
    <div class="SIMPLIFY-container">
        <h2 class="SIMPLIFY-header">SIMPLIFY DRINKING</h2>
      
        <div class="row contain">
          <div class="feature-box col-lg-4">
            <i class="icon1 fas fa-tasks fa-4x"></i>
            <h2 class="feature-title1">Select</h2> 
             <p class="description">Carb conscious, calorie conscious,<br>
              vegetarian – we’ve got lots of options<br>
               to  your schedule and diet.</p>
          </div> 
  
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-exchange-alt fa-4x"></i>
            <h2 class="feature-title">Customize It</h2>
            <p>Use our Customize It feature to<br>
              upgrade, swap, or double up<br>
              proteins on select meals.</p>
          </div>
  
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-glass-cheers fa-4x"></i>
            <h2 class="feature-title">Enjoy.</h2>
            <p>Effortlessly create and plate<br>
              your meals in no time.<br>
              Dinner is solved!</p>
          </div>
        </div>
    </div>
                      <!-- MENU -->
         <div class="Menu ">
            <h1 class="heading-menu">WHAT’S ON YOUR MENU</h1>
              <div class="row">
                  <div class="col-lg-4 container">
                    <img class="img1" src="50.png" alt="" srcset="">
                    <div class="middle1">
                        <div class="text1"><a href="beer.php">Beer</a></div>
                      </div>
                  </div>
                    <div class="col-lg-4 container">
                      <img class="img2" src="wine.png" alt="" srcset="">
                      <div class="middle2">
                        <div class="text2"><a href="whisky.php">Whisky</a></div>
                      </div>
                    </div>
                    <div class="col-lg-4 container">
                          <img class="img3" src="35.png" alt="" srcset="">
                          <div class="middle3">
                            <div class="text3"><a href="spirit.php">Spirit</a></div>
                          </div>
                        </div>
                 </div>
          </div>
                                      <!-- customer -->
            <div class="customer">
           <h1 class="heading-testimonial">Some Of Our Valuable Customers</h1>
            <section class="colored-section" id="testimonials">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
               
                <div class="carousel-item active" data-interval="1000">
                  <h2>Kunal Soni</h2>
                  <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, exercitationem!<br> Ea in ullam expedita laborum delectus, vel sit temporibus dolor, molestiae odio itaque.<br> Ea eveniet voluptatem blanditiis inventore doloremque quos!</h4>
                </div>
                
                <div class="carousel-item">
                  <h2>Kaushik</h2>
                  <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quidem maiores incidunt nesciunt nulla veritatis exercitationem? Unde illo pariatur esse<br> impedit necessitatibus quidem ex officia quia sequi, ipsa molestiae deleniti nulla.</h4>
                </div>
                <div class="carousel-item">
                    <h2>Shinit</h2>
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quidem maiores incidunt nesciunt nulla veritatis exercitationem? Unde illo pariatur esse<br> impedit necessitatibus quidem ex officia quia sequi, ipsa molestiae deleniti nulla.</h4>
                  </div>
                  <div class="carousel-item">
                    <h2>Srinidhi</h2>
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quidem maiores incidunt nesciunt nulla veritatis exercitationem? Unde illo pariatur esse<br> impedit necessitatibus quidem ex officia quia sequi, ipsa molestiae deleniti nulla.</h4>
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
                                   <!-- social-media-post -->
            <div class="social">
            <section class="social-media-post">
                   <div class="hashtags">
                    <h1 class="heading-socialmedia " style="color: black;">SHARE Your Moments<br>on Social Media</h1><br>
                   <a href="https://www.instagram.com"><h2 style="color: black;" class="p-socialmedia fas fa-hashtag >">IamDrunker</h2></a> 
                   <div class="row hash1">
                   <div class="col-lg-3">
                    <img class="social-img1" src="party1.jpg" alt="" srcset="">
                   </div>
                   <div class="col-lg-3">
                    <img class="social-img2" src="party2.jpg" alt="" srcset="">
                   </div>
                   <div  class="col-lg-3">
                    <img class="social-img3" src="party3.jpg" alt="" srcset="">
                   </div>
                   <div class="col-lg-3">
                    <img class="social-img4" src="party4.jpg" alt="" srcset="">
                    </div>
                    </div>
                    </div>
                  </section>
                </div>
                                                      <!-- footer -->
              <footer class="white-section" id="footer">
                <div class="container-fluid">
                  <!-- <button type="button" class="button1 btn btn-dark btn-lg download-button"><i class="fab fa-apple"></i> Download</button>
                  <button type="button" class="button2 btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i> Download</button> -->
                  <div class="footer">
                 <a href="https://www.facebook.com/"><i class="social-icon fab fa-facebook-f"></i></a>
                 <a href="https://www.twitter.com/"><i class="social-icon fab fa-twitter"></i></a>
                 <a href="https://www.instagram.com/"><i class="social-icon fab fa-instagram"></i></a>
                 <a href="https://www.youtube.com/"><i class="social-icon fab fa-youtube"></i></a>
                  <p class="headercp">© Copyright 2020  wineers</p>
                </div>
                </div>
              </footer>
          
</body>
</html>