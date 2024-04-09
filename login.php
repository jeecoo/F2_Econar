<?php
    include 'connect.php'
   
?>

<?php	
	if(isset($_POST['loginbtn'])){
		$uname=$_POST['login-user'];
		$pwd=$_POST['login-txtpassword'];
		//check tbluseraccount if username is existing
		$sql ="SELECT * FROM tbluseraccount WHERE username='".$uname."'";
		
		$result = mysqli_query($connection,$sql);	
		
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