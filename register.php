
        <?php    
            include 'connect.php';
        //  require_once 'includes/header.php';
        ?>

        <?php	
            if(isset($_POST['btnRegister'])){		
                //retrieve data from form and save the value to a variable
                //for tbluserprofile
                $fname = $_POST['txtusername'];		
                $lname = $_POST['txtlastname'];
                // $gender = $_POST['txtgender'];
                
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
                } else {
                    echo "<script language='javascript'>
                                alert('Username/email already existing');
                        </script>";
                }    
            }
        ?>