<?php
    include 'connect.php';
   
?>

<?php
    require_once 'header.php';
   
?>

<?php	
	// if(isset($_POST['btnLogin'])){
	// 	$uname=$_POST['login-user'];
	// 	$pwd=$_POST['login-txtpassword'];
	// 	//check tbluseraccount if username is existing

	// 	$sql ="SELECT * FROM tbluseraccount WHERE username='".$uname."'";
		
	// 	$result = mysqli_query($connection,$sql);	
		
	// 	$count = mysqli_num_rows($result);
	// 	$row = mysqli_fetch_array($result);
		
	// 	if($count== 0){
	// 		echo "<script language='javascript'>
	// 					alert('Username is already existing');
	// 			  </script>";
	// 	}else if($row[3] != $pwd) {
	// 		echo "<script language='javascript'>
	// 					alert('Incorrect password');
	// 			  </script>";
	// 	}else{
	// 		$_SESSION['username']=$row[0];
	// 		header('location: dashboard.php');
    //   exit();
	// 	}
	// }
?>


<?php	

    // if(isset($_POST['btnRegister'])){		
    //     //retrieve data from form and save the value to a variable
    //     //for tbluserprofile
    //     $fname = $_POST['txtfirstname'];		
    //     $lname = $_POST['txtlastname'];
    //     // $gender = $_POST['txtgender'];
        
    //     //for tbluseraccount
    //     $email = $_POST['txtemail'];		
    //     $uname = $_POST['txtusername'];
    //     $pword = $_POST['txtpassword']; 


    //     $sql2 = "SELECT * FROM tbluseraccount WHERE username='$uname' AND emailadd = '$email'";
    //     $result = mysqli_query($connection, $sql2); 
    //     $row = mysqli_num_rows($result);
        

    //     if($row == 0){
    //     	//save data to tbluserprofile			
	// 		$sql1 = "INSERT INTO tbluserprofile (firstname, lastname, gender) VALUES ('$fname', '$lname', '$gender')";
	// 		mysqli_query($connection, $sql1);
			
	// 		//Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
		
	// 		// $last_insert_id = mysqli_insert_id($connection);
	// 		$sql = "INSERT INTO tbluseraccount (emailadd, username, password) VALUES ('$email', '$uname', '$pword')";
	// 		mysqli_query($connection, $sql);
	// 		echo "<script language='javascript'>
	// 					alert('New record saved.');
	// 			</script>";
	// 		//header("location: index.php");
    //     } else {
    //         echo "<script language='javascript'>
    //                     alert('Username/email already existing');
    //               </script>";
    //     }    
    // }
?> 


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css\login.css" />
    <meta charset="UTF-8" />  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- POPPINS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <title>Login Page</title>
    <script src="script.js"></script> 
	<script>
		function redirectToIndex() {
			window.location.href = 'index.php';
		}
	</script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
	<body>
			<div class="wrapper" id="login-popup">
				<span class="icon-close" onclick="redirectToIndex()">
				<ion-icon name="close" style="font-size: 20px;"></ion-icon>
				</span>

			<div class="form-box login">	
				<h2>Log In</h2>
				<form method="post" action="login_user.php">
					<div class="input-box">
					<span class="icon"><ion-icon name="mail"></ion-icon></span>
					<input type="email" name ="txtemail" required>
					<label for="txtemail">Email</label>
					</div>
					<div class="input-box">
					<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
					<input type="password" name ="txt"  required>  
					<label for="txtpassword">Password</label>
					</div>	
					<button type="submit" name="btnLogin" class="loginbtn">Log In</button>
					<div class="login-register">	
					<p>Don't have an account?
						<a href="#" class="register-link">Register</a>
					</p>
					</div>
				</form>
			</div>

			<div class="form-box register">
			<h2>Register</h2>
			<form method="post" action="register_user.php">
				<div class="input-box">
				<span class="icon"><ion-icon name="mail"></ion-icon></span>
				<input type="email" name="txtemail" required>
				<label for="txtemail">Email</label>
				</div>
				<div class="input-box">
				<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
				<input type="password" name="txtpassword" required>
				<label for="txtpassword">Password</label>
				</div>
				<div class="input-box">
				<span class="icon"><ion-icon name="person"></ion-icon></span>
				<input type="text" name="txtfirstname" required>
				<label for="txtfirstname">Firstname</label>
				</div>
				<div class="input-box">
				<span class="icon"><ion-icon name="person"></ion-icon></span>
				<input type="text" name="txtlastname" required>
				<label for="txtlastname">Lastname</label>
				</div>
				<div class="input-box">
				<span class="icon"><ion-icon name="call"></ion-icon></span>
				<input type="text" name="txtmobilenumber" required>
				<label for="txtmobilenumber">Mobile Number</label>
				</div>
				<button type="submit" name="btnRegister" class="loginbtn">Register</button>
				<div class="login-register">
				<p>Already have an account?
					<a href="#" class="login-link">Login</a>
				</p>
				</div>
			</form>
			</div>
		</div>
	</body>
</html>

<?php
    require_once 'footer.php';
?>

