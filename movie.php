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
    <title>Movies</title>
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
            background-color: var(--background-color);
            color: black;
            max-width: 100%;
            display: flex;
            justify-content: center;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .container {
            max-width: 100%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            padding-top: 20px;
            font-size: 20px;
            text-align: left;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-primary {
            margin-top: 20px;
            background-color: var(--main-color);
        }

        .btn-primary:hover {
            background-color: #F4BB44;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td:last-child {
            text-align: center;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 14px;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>List of Movies</h2>
        <br>
        <table>
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
                include 'connect.php';

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
                        <a class='btn btn-sm btn-primary' href='/F2_Econar/edit.php?id={$row['movieid']}'>Edit</a>
                        <a class='btn btn-sm btn-danger' href='/F2_Econar/delete.php?id={$row['movieid']}'>Delete</a>
                    </td>
                    </tr>
                    ";
                }
            ?>
            </tbody>
        </table>

        <a class="btn btn-primary" href="/F2_Econar/create.php" role="button">Add Movie</a>
    </div>
</body>
</html>
