<?php
      include 'connect.php';
      //include 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css\styles2.css" />
    <meta charset="UTF-8" />  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- POPPINS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <title>POPCORNCINEMA</title>

    <script src="script.js"></script> 
  </head>

  
  <body>
    <!-- NAVBAR -->
      <header>
        <a href="index.html" class="logo" id="logo">
          <img src="images/popcorn cinema logo.png" alt="popcorn_cinema_logo">
        </a>

      <!-- menu -->
        <ul class="menu">
          <li><a href="home.html" class="home-active">Home</a></li>
          <li><a href="#movie-schedules">Movie Schedules</a></li>
          <li><a href="#coming-soon">Coming Soon</a></li>
          <li><a href="about_us.html">About Us</a></li>
          <li><a href="#contacts">Contact Us</a></li>
        </ul>

        <div class="all-btn">
          <div class="btn1" id="btnRegister"><a href="register.php">Register</a></div>
          <div class="btn2" id="btnLogin"><a href="login.php">Login</a></div>
          <div class="btn3" id="btnAdmin"><a href="admin.php">Admin</a></div>
        </div> 
      </header>
    
      
      <!-- HERO -->
    <div class="landing_page">
    <h1>POPCORN CINEMA</h1>
      <div class="header">
      </div>
    </div>

    <footer>
      <!-- <div class="cit_logo_footer"> -->
        <img id="popcorn" src="images/popcorn cinema logo.png" alt="logo">
      <!-- </div> -->

      <div class="box1" id="contacts">

        <p>Econar, John Mark A.</p>
        <p>Paragoso, Yllana Mikhaila</p>
      </div>


      <div class="box2">
        <h1>Get in Touch</h1>
        <!-- <div class="icons">
          <a href="https://www.facebook.com/apollo.raval" target="_blank"><img src="images/fb.png" ></a>
          <a href="http://www.instagram.com" target="_blank"><img src="images/ig.png"></a>
          <a href="linkedin.com" target="_blank"><img src="images/linkedin.png"></a>
          <a href="http://"><img src="images/twitter.png"></a>
        </div> -->
        
        
        <!-- <div class="search">
          <input type="text" placeholder="Search">

          <div id="search_background">
            <img src="images/search.png" alt="">
          </div>
        </div> -->
        
      </div>
    </footer>
  </body>
</html


