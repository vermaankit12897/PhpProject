<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful";
}

// Create a db
$dbName = "dbHarry";
$sql = "CREATE DATABASE $dbName";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if ($result) {
    echo "The db was created successfully!<br>";
} else {
    echo "The db was not created successfully because of this error ---> " . mysqli_error($conn);
}

mysqli_close($conn); // Close the database connection
?>
