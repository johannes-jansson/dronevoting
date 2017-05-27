<?php
$servername = "fpvwiki.se.mysql";
$username = "fpvwiki_se_dronevoting";
$password = "c6h12o6";
$dbname = "fpvwiki_se_dronevoting";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare( "INSERT INTO Votes (voter, performance, flow, tech, risk)
		VALUES (:voter, :performance, :flow, :tech, :risk)");
    $stmt->bindParam(':voter', $_POST['hiddenidentifier']);
    $stmt->bindParam(':performance', $_POST['performance']);
    $stmt->bindParam(':flow', $_POST['flow']);
    $stmt->bindParam(':tech', $_POST['tech']);
    $stmt->bindParam(':risk', $_POST['risk']);

    $stmt->execute();

    // use exec() because no results are returned
    //$conn->exec($sql);
    echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
