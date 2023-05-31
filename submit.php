<?php
// Database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'phone_directory';

// Establish a database connection
$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Sanitize the data (optional, but recommended)
    $name = mysqli_real_escape_string($connection, $name);
    $phone = mysqli_real_escape_string($connection, $phone);

    // Insert the data into the database
    $query = "INSERT INTO phone_directory (Name, Phone_Number) VALUES ('$name', '$phone')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo 'Data submitted successfully.';
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
?>
