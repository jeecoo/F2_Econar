<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\admin_dashboard.css" />
    <meta charset="UTF-8" />  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- POPPINS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <title>Header Page</title>
    <script src="script.js"></script> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
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
          <!-- <div class="reg_btn" id="reg_btn">Register</div> -->
          <!-- <a href="login.php"><div class="login_btn" id="login_btn">Log In</div></a> -->
        <a href="movie.php"><div class="movie_btn" id="movie_btn">Dashboard</div></a>
        
        <a href="index.php"><div class="exit_btn" id="exit_btn">
        <ion-icon name="exit" style="font-size: 20px;"></ion-icon></div>
        </a>
       
      </header>
</body>
</html>