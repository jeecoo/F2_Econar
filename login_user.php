<?php
    // Include database connection file
    include 'connect.php';

    // Start session
    session_start();

    // Handle login
    if(isset($_POST['btnLogin'])){
		$email=$_POST['txtemail'];
		$pwd=$_POST['txtpassword'];

		//check tbluseraccount if username is existing
		
        $sql = "SELECT * FROM tbluseraccount WHERE emailadd = '$email'";
        $result = mysqli_query($connection, $sql);;	
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result); 
		
		if($count== 0){
			echo "<script language='javascript'>
						alert('Username is already existing');
				  </script>";
		}else if($row[3] != $pwd) {
			echo "<script language='javascript'>
						alert('Incorrect password');
				  </script>";
		}else{
			$_SESSION['username']=$row[0];
			header('location: dashboard.php');
      exit();
		}
	}

?>
