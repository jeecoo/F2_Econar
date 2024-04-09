<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">

    <style>
      body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1, h2 {
    margin-top: 30px;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {
    background-color: #f5f5f5;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>

        <!-- Add Movie Form -->
        <h2>Add Movie</h2>
        <form id="addMovieForm">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required><br>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea><br>
            <label for="poster">Poster URL:</label>
            <input type="text" id="poster" name="poster" required><br>
            <button type="submit">Add Movie</button>
        </form>

        <!-- View Movies -->
        <h2>View Movies</h2>
        <table id="moviesTable">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Poster</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Movie entries will be populated dynamically here -->
            </tbody>
        </table>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
