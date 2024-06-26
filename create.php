<?php
    include 'connect.php';
    require_once 'admin_header.php';
?>

<?php

    $title = "";
    $genre = "";
    $duration = "";
    $releasedate = "";

    $errorMessage = "";
    $successMessage = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST["title"];
        $genre = $_POST["genre"];
        $duration = $_POST["duration"];
        $releasedate = $_POST["releasedate"];

        do{
            if(empty($title) || empty($genre) || empty($duration) || empty($releasedate)){
                $errorMessage = "All the fields are required";
                break;
            }

            $sql = "INSERT INTO tblmovie (title, genre, duration, releasedate) " .
                    "VALUES ('$title', '$genre', '$duration', '$releasedate')";
            
            $result = $connection->query($sql);
            $title = "";
            $genre = "";
            $duration = "";
            $releasedate = "";

            $successMessage = "Movie Added Successfully";
            header("location:/F2_Econar/movie.php");
            exit;
        }while(false);
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8" />  
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- POPPINS FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

        <script src="script.js"></script> 
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <title>Add Movies</title>
        <style>
            :root { 
            --main-color:  #FEBE10;
            --secondary-color: #cc0000;
            --text-color: white;
            --background-color: #020307;
            }

            *{
                font-family: "Poppins", sans-serif;
                padding: 0;
                margin: 0;  
                font-size: 13px;
                box-sizing: border-box;
                font-weight: 500;  
                font-style: normal;
                scroll-padding-top: 2rem;
                scroll-behavior: smooth;
            }

            
            body {
                color: black;
                max-width: 100%;
                min-height: 100vh;
                justify-content: center;
                background-size: cover;
                background-position: center;
                background-color: var(--background-color);
        
            }

            .container {
                width: 500px;
                margin: 130px auto;
                padding: 20px;
                background-color: #fff;
                border: 5px solid var(--main-color);
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                z-index: 1000000;
            }

            h2 {
                color: black;
                margin-bottom: 20px;
                padding-top: 20px;
                font-size: 20px;
                text-align: left;
                font-weight: bold;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                color: black;
                display: block;
                margin-bottom: 5px;
            }

            input[name="duration"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }

            input[name="title"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }

            input[type="date"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }

            select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }

            .btn {
                padding: 10px 20px;
                background-color: var(--main-color);
                border: none;
                border-radius: 5px;
                color: #fff;
                cursor: pointer;
            }

            .btn:hover {
                background-color: #F4BB44;
            }

            .btn-outline {
                text-decoration:none;
                background-color: #dc3545;
                border: 1px solid var(--secondary-color);
                color: var(--text-color);
            }

            .btn-outline:hover {
                background-color: #c82333;
                color: #fff;
            }

            .alert {
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid transparent;
                border-radius: 5px;
            }

            .alert-warning {
                background-color: #ffc107;
                border-color: #ffc107;
                color: #333;
            }

            .alert-dismissible {
                position: relative;
                padding-right: 35px;
            }

            .btn-close {
                position: absolute;
                top: 50%;
                right: 10px;
                transform: translateY(-50%);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Add Movie</h2>
            <?php
                if(!empty($errorMessage)){
                    echo "
                    <div class='alert alert-warning alert-dismissible'>
                        <strong>$errorMessage</strong>
                        <button class='btn-close' onclick='this.parentElement.style.display=\"none\"'></button>
                    </div>
                    ";
                }
            ?>
            <form method="post">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Enter title" value="<?php echo $title; ?>">
                </div>

                <div class="form-group">
                <label>Genre</label>
                <select name="genre">
                    <option value="">Select Genre</option>
                    <option value="Action" <?php if ($genre == "Action") echo "selected"; ?>>Action</option>
                    <option value="Comedy" <?php if ($genre == "Comedy") echo "selected"; ?>>Comedy</option>
                    <option value="Drama" <?php if ($genre == "Drama") echo "selected"; ?>>Drama</option>
                    <option value="Horror" <?php if ($genre == "Horror") echo "selected"; ?>>Horror</option>
                    <option value="Romance" <?php if ($genre == "Romance") echo "selected"; ?>>Romance</option>
                </select>
                </div>
                <div class="form-group">
                <label>Duration (hh:mm)</label>
                <input type="text" name="duration" placeholder="e.g., 2:30" value="<?php echo $duration; ?>">
                </div>
                <div class="form-group">
                    <label>Release Date</label>
                    <input type="date" name="releasedate" value="<?php echo $releasedate; ?>">
                </div>   
            
                
                <?php
                if(!empty($successMessage)){
                    echo "
                    <div class='alert alert-warning alert-dismissible'>
                        <strong>$successMessage</strong>
                        <button class='btn-close' onclick='this.parentElement.style.display=\"none\"'></button>
                    </div>
                    ";
                }           
                ?>
                <div class="form-group">
                    <button type="submit" class="btn">Add</button>
                    <a class="btn btn-outline" href="movie.php" role="button">Cancel</a>
                </div>

            </form>
        </div>
    </body>
    </html>

    <?php
        require_once 'footer.php';
    ?>
