<?php
    $servername = "localhost";
    $username= "root";
    $password = "";
    $database = "dbeconarf2";
    
    $connection = new mysqli($servername, $username, $password, $database);

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Add Movie</h2>
        <?php
            if(!empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
        ?>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Title</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Genre</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="genre" value="<?php echo $genre; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Duration</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="duration" value="<?php echo $duration; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Release Date</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="releasedate" value="<?php echo $releasedate; ?>">
                </div>
            </div>          
            
            <?php
             if(!empty($successMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }           
            ?>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/dbparagosof2/movie.php" role="button">Cancel</a>
                </div>
            </div>

        </form>
    </div>
</body>
</html>