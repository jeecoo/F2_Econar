<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Movies</h2>
        <a class="btn btn-primary" href="/F2_Econar/create.php" role="button">Add Movie</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Duration</th>   
                    <th>Release Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $servername = "localhost";
                    $username= "root";
                    $password = "";
                    $database = "dbeconarf2";

                    $connection = new mysqli($servername, $username, $password, $database);

                    if($connection->connect_error){
                        die("Connection failed: " . $connection->connect_error);
                    }

                    $sql = "SELECT * FROM tblmovie";
                    $result = $connection->query($sql);
                    
                    if(!$result){
                        die("Invalid query: " . $connection->error);
                    }

                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                        <td>{$row['movieid']}</td>
                        <td>{$row['title']}</td>
                        <td>{$row['genre']}</td>
                        <td>{$row['duration']}</td>
                        <td>{$row['releasedate']}</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='/F2_Econar/edit.php?id={$row['movieid']}'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/F2_Econar/delete.php?id={$row['movieid']}'>Delete</a>
                        </td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
