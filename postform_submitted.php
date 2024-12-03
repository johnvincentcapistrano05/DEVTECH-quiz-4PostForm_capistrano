<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PostFormDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data and sanitize
$name = $conn->real_escape_string($_POST['name']);
$movie = $conn->real_escape_string($_POST['movie']);
$degree = $conn->real_escape_string($_POST['degree']);
$gender = isset($_POST['gender']) ? $conn->real_escape_string($_POST['gender']) : NULL;
$units = isset($_POST['units']) ? implode(", ", $_POST['units']) : "None";

// Insert data into database
$sql = "INSERT INTO Submissions (name, favorite_movie, degree, gender, favorite_units)
        VALUES ('$name', '$movie', '$degree', '$gender', '$units')";

if ($conn->query($sql) === TRUE) {
    // Display the submitted information
    echo "<h1>Thank you for submitting the form!</h1>";
    echo "<p>Hello $name</p>";
    echo "<p>You like the movie \"$movie\"</p>";
    echo "<p>You are enrolled in $degree's Degree.</p>";
    echo "<p>Your gender is $gender.</p>";
    echo "<p>Your favorite subject(s) is/are $units.</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
