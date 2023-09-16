<?php

// include '_dbconnect.php';
require '_dbconnect.php';

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);


// find the number or records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database<br>";
    // We can fetch in a better way using the while loop
while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['sno'] . " Hello " . $row['name'] . " Welcome to " . $row['dest'];
    echo "<br>";
}


?>