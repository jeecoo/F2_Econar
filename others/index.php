<?php
    include 'connect.php'
   
?>

<head>
        <title>Login</title>
        <link rel="stylesheet" href="loginPage.css">

    <style>
    .login-popup{
        max-width: 720px;
        width: 100%;
        background-color:#fccc0d;
        position: fixed;
        border-radius: 10px;
        border: 2px solid #ffffff;
        transform: translate(-50%,-50%);
        top: 50%;
        left: 50%
    }

    .login-popup .login-box{
        display: flex;
    }

    .login-box .login-details{
        max-width: 330px;
    }

    .login-box .login-content {
        width: 100%;
        padding: 35px;
    }

    form .input-field{
        height: 50px;
        width: 100%;
        margin-top: 25px;
        position: relative;
    }

    form .input-field input{
        height: 100%;
        width: 80%;
        outline: none;
        padding: 0 15px;
        font-size: 0.95rem;
        border-radius: 10px;
        border: 1px solid #717171;
    }

    form .input-field label{
        position: absolute;
        top: 50%;
        left: 15px;
        color: #717171;
        pointer-events: none;
        transform: translateY(-50%);
        transition: .2s ease;
    }

    .input-field input:is(:focus, :valid) ~ label{
        color:aqua;
        font-size: 0.75rem;
        transform: translateY(-120%);
    }
    </style>
    </head>
    
    <body>
        <!--Login Form Popup-->
        <div class="login-popup">
            <div class="login-box">
                <div class="login-details">
                    <h2>Welcome back!</h2>
                </div>
                <div class="login-content">
                    <h2>LOGIN</h2>
                    <!--<input type="text">-->
                    <form action="#">
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text">
                            <br>
                        </div>
                        <div class="input-field">
                            <label>Password</label>
                            <input type="password">
                        </div>
                        <a href="#" class="forgot-pass">Forgot Password?</a>
                        <button type="submit">Log In</button>
                    </form>
                    <div class="dont-have-acc">
                        Don't have an account?
                        <a href="register.php">Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </body>

