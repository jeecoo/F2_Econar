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
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <h2>Registration Form</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <input type="submit" value="Register">
    </form>
    

    <?php	
        if(isset($_POST['btnRegister'])){		
            //retrieve data from form and save the value to a variable
            //for tbluserprofile
            $fname=$_POST['txtfirstname'];		
            $lname=$_POST['txtlastname'];
            $gender=$_POST['txtgender'];
            
            //for tbluseraccount
            $email=$_POST['txtemail'];		
            $uname=$_POST['txtusername'];
            $pword=$_POST['txtpassword'];
            
            //save data to tbluserprofile			
            $sql1 ="Insert into tbluserprofile(firstname,lastname,gender) values('".$fname."','".$lname."','".$gender."')";
            mysqli_query($connection,$sql1);
            
            //Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
            $sql2 ="Select * from tbluseraccount where username='".$uname."'";
            $result = mysqli_query($connection,$sql2);
            $row = mysqli_num_rows($result);
            if($row == 0){
                $sql ="Insert into tbluseraccount(emailadd,username,password) values('".$email."','".$uname."','".$pword."')";
                mysqli_query($connection,$sql);
                echo "<script language='javascript'>
                            alert('New record saved.');
                    </script>";
                //header("location: index.php");
            }else{
                echo "<script language='javascript'>
                            alert('Username already existing');
                    </script>";
            }
                
            
        }
            

    ?>

</body>