<?php


// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

//Variables to be inserted into the table 
$name = "Vikrant";
$destination = "Russia";


// Sql query tobe executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";

$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip Table in the database
if ($result) {
    echo "The record has been inserted successfully!<br>";
} else {
    echo "The was was not inserted successfully because of this error ---> " . mysqli_error($conn);
}
?>