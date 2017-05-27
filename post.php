<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dronevoting";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare( "INSERT INTO Votes (voter, performance, flow, tech, risk)
		VALUES (:voter, 'emil', 10, 10, 10)");
    $stmt->bindParam(':voter', $_POST['identifier']);

    $stmt->execute();

    // use exec() because no results are returned
    //$conn->exec($sql);
    echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
