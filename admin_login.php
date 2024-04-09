<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css\admin.css" />
   
  <!-- POPPINS FONT -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

  <title>Admin Login Page</title>
  <style>
    /* Body Background */
    body {
        background-color: black;
        font-family: 'Poppins', sans-serif;
    }

    /* Login Box Styling */
    .login-box {
        width: 300px;
        margin: 150px auto;
        background-color: yellow;
        padding: 20px;
        border-radius: 5px;
    }

    /* Login Logo Styling */
    .login-logo a {
        color: red;
        font-size: 24px;
        text-decoration: none;
    }

    /* Login Box Message Styling */
    .login-box-msg {
        color: black;
        text-align: center;
    }

    /* Form Input Styling */
    .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid red;
        border-radius: 5px;
    }

    /* Form Button Styling */
    .btn-danger {
        width: 100%;
        padding: 10px;
        background-color: red;
        border: 1px solid red;
        border-radius: 5px;
        color: black;
        cursor: pointer;
    }

    /* Form Button Hover Styling */
    .btn-danger:hover {
        background-color: darkred;
        border-color: darkred;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a>Admin Panel</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Please login to start your session</p>
    <form action="pages/process_login.php" method="post">
        <div class="form-group has-feedback">
            <input name="Email" type="text" size="25" placeholder="Username" class="form-control"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input name="Password" type="password" size="25" placeholder="Password" class="form-control" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger">Login</button>
        </div>
    </form>
  </div>
</body>
</html>
