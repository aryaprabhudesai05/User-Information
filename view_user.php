<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            border: 2px solid #ccc;
            padding: 20px;
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .submitted-info {
            border: 2px solid #ccc;
            padding: 20px;
            width: 50%;
            margin: 20px auto;
            background-color: #f9f9f9;
        }

        .submitted-info h2 {
            margin-top: 0;
        }

        .submitted-info p {
            margin-bottom: 5px;
        }

        .profileSize {
            width: 20%;
            height:20%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            
        }
    </style>
</head>
<body>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve saved user data
$sql = "SELECT * FROM Users ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='submitted-info'>";
        echo "<h2>User Information</h2>";
        echo "<p><strong>Profile Image:<br></strong> <img src='./New folder/" . $row["profile_image"] . "' alt='profile_image' class='profileSize'></p>";
        echo "<p><strong>Name:</strong> " . $row["Name"] . "</p>";
        echo "<p><strong>Contact:</strong> " . $row["Contact"] . "</p>";
        echo "<p><strong>Email:</strong> " . $row["Email"] . "</p>";
        echo "<p><strong>Gender:</strong> " . $row["Gender"] . "</p>";
        echo "<p><strong>Address:</strong> " . $row["Address"] . "</p>";
        echo "<p><strong>Qualification:</strong> " . $row["Qualification"] . "</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<div style="text-align: center; margin-top: 20px;">
    <a href="index.html"><button type="button">Go Back to Form</button></a>
</div>
</html>

<img src="./New folder/pexels-anjana-c-169994-674010.jpg" alt="" srcset="">