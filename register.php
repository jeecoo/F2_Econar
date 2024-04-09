
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #db1a1a;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #ffc814;
            
        }
    </style>
</head>


<body>
<?php    
    include 'connect.php';    
  //  require_once 'includes/header.php';
?>
<div style='background-color:#db1a1a'>
    <center>
        <p style="color:white"><h2>User Registration Page</h2></p>
    </center>
</div>  
<form action="#" method="post">
    <h2>Registration Form</h2>
    <label for="txtfirstname">First Name</label>
    <input type="text" id="txtfirstname" name="txtfirstname" required>
 
    <label for="txtlastname">Last Name</label>
    <input type="text" id="txtlastname" name="txtlastname" required>
 
    <label  for="txtgender" id="gender">Gender</label>
    <select id="txtgender" name="txtgender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <br>
    <label for="txtemail">Email</label>
    <input type="email" id="txtemail" name="txtemail" required>
 
    <label for="txtusername">Username</label>
    <input type="text" id="txtusername" name="txtusername" required>
 
    <label for="txtpassword">Password</label>
    <input type="password" id="txtpassword" name="txtpassword" required>
 
    <label for="confirm_password">Confirm Password</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
 
    <input type="submit" name="btnRegister" value="Register">
</form>
 
 
 
<?php	

    if(isset($_POST['btnRegister'])){		
        //retrieve data from form and save the value to a variable
        //for tbluserprofile
        $fname = $_POST['txtfirstname'];		
        $lname = $_POST['txtlastname'];
        $gender = $_POST['txtgender'];
        
        //for tbluseraccount
        $email = $_POST['txtemail'];		
        $uname = $_POST['txtusername'];
        $pword = $_POST['txtpassword'];
        $sql2 = "SELECT * FROM tbluseraccount WHERE username='$uname' AND emailadd = '$email'";
        $result = mysqli_query($connection, $sql2);
        $row = mysqli_num_rows($result);
        
        if($row == 0){
        //save data to tbluserprofile			
        $sql1 = "INSERT INTO tbluserprofile (firstname, lastname, gender) VALUES ('$fname', '$lname', '$gender')";
        mysqli_query($connection, $sql1);
        
        //Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
       
            // $last_insert_id = mysqli_insert_id($connection);
            $sql = "INSERT INTO tbluseraccount (emailadd, username, password) VALUES ('$email', '$uname', '$pword')";
            mysqli_query($connection, $sql);
            echo "<script language='javascript'>
                        alert('New record saved.');
                  </script>";
            //header("location: index.php");
        } else {
            echo "<script language='javascript'>
                        alert('Username/email already existing');
                  </script>";
        }    
    }
?> 

 
 
 
</body>