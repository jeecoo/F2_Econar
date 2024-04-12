<?php
    // Start session
    session_start();

    // Include database connection file
    include 'connect.php';

    // Handle login
    if(isset($_POST['btnLogin'])){
        $email=$_POST['txtemail'];
        $pwd=$_POST['txtpassword'];

        // Check if the user is an admin or has the email "popcorncinema_admin@gmail.com"
        if($email == "popcorncinema_admin@gmail.com") {
            // Redirect admin to admin_dashboard.php
            header('location: admin_dashboard.php');
            exit();
        }

        // Check tbluseraccount if username is existing
        $sql = "SELECT * FROM tbluseraccount WHERE emailadd = '$email'";
        $result = mysqli_query($connection, $sql);
        $count = mysqli_num_rows($result);
        
        if($count == 0){
            echo "<script language='javascript'>
                        alert('Username is already existing');
                  </script>";
        }else {
            $row = mysqli_fetch_array($result);
            if($row['password'] != $pwd) {
                echo "<script language='javascript'>
                            alert('Incorrect password');
                      </script>";
            } else {
                $_SESSION['email'] = $email; // Set the email in session
				$_SESSION['userid'] = $row['userid']; // Storing userid in session
				header('location: user_dashboard.php');
				exit();
            }
        }
    }
?>