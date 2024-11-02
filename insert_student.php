<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = ''; // Change if you have set a password
$database = 'phpDB';

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data and prepare the SQL query
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$maks = $_POST['maks'];

// Prepare and bind
$sql = "INSERT INTO student (FirstName, LastName, Email, Maks) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $firstName, $lastName, $email, $maks);

// Execute and check for success
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>


<a href="index.php"> Back</a>