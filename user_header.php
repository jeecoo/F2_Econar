<?php
    // Start session
    session_start();

    // Include database connection file
    include 'connect.php';

    // Fetch the logged-in user's firstname from tbluserprofile
    if(isset($_SESSION['email'])) {
        $email = mysqli_real_escape_string($connection, $_SESSION['email']); // Sanitize the input to prevent SQL injection
        $sql_profile = "SELECT tbluserprofile.firstname 
                        FROM tbluserprofile 
                        JOIN tbluseraccount ON tbluserprofile.userid = tbluseraccount.accid
                        WHERE tbluseraccount.emailadd = '$email'";
        $result_profile = mysqli_query($connection, $sql_profile);

        if($result_profile && mysqli_num_rows($result_profile) > 0) {
            $row_profile = mysqli_fetch_assoc($result_profile);
        } else {
            echo "Error: Unable to fetch user profile."; // Output any SQL error for debugging purposes
        }
    } else {
        echo "Error: Email not set in session."; // Output an error message if email is not set in session
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\user_dashboard.css" />
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
        
        <div class="user_btn" id="user_btn">
            <div class="profile-container">
                <!-- Display the user's profile picture -->
                <img src="images/profile_pic.jpg" alt="Profile Image" id="profile_image">
            </div>
            <?php 
                // Check if the firstname exists
                if(isset($row_profile)) { // Check if $row_profile is set
                    echo "<p><span>{$row_profile['firstname']}</span></p>"; 
                }
            ?>

            <a href="index.php"><div class="exit_btn" id="exit_btn">
            <ion-icon name="exit" style="font-size: 20px;"></ion-icon></div>
            </a>
        </div>
       
       
      </header>
</body>
</html>
