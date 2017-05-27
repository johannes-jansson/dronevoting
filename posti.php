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

$info = $_POST['identifier'];
echo $info;

$sql = "INSERT INTO Votes (voter, performance, flow, tech, risk)
VALUES ('".$_POST['identifier']."', 'emil', 10, 10, 10)";

$stmt = mysqli_prepare($sql);
$stmt->bind_param("sss", $_POST['identifier']);
$stmt->execute();



// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();
?>
