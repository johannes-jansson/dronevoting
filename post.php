<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dronevoting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Votes (voter, performance, flow, tech, risk)
VALUES ('johannes', 'emil', 10, 10, 10)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
