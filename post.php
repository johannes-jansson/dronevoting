<?php
    require_once("connect.inc.php");

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare( "INSERT INTO Votes (voter, performance, risk, flow, variation, combos, crash)
		VALUES (:voter, :performance, :risk, :flow, :variation, :combos, :crash)
		ON DUPLICATE KEY UPDATE risk=:risk, flow=:flow, variation=:variation, combos=:combos, crash=:crash");
    $stmt->bindParam(':voter', $_POST['hiddenidentifier']);
    $stmt->bindParam(':performance', $_POST['performance']);
    $stmt->bindParam(':risk', $_POST['risk']);
    $stmt->bindParam(':flow', $_POST['flow']);
    $stmt->bindParam(':variation', $_POST['variation']);
    $stmt->bindParam(':combos', $_POST['combos']);
    $stmt->bindParam(':crash', $_POST['crash']);

    $stmt->execute();

    echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
try {
    $conn = new PDO("mysql:host=$host;dbname=fpvwiki_se_dronevoting_backup", "fpvwiki_se_dronevoting_backup", "mrsteele");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare( "INSERT INTO Votes (voter, performance, risk, flow, variation, combos, crash)
		VALUES (:voter, :performance, :risk, :flow, :variation, :combos, :crash)
		ON DUPLICATE KEY UPDATE risk=:risk, flow=:flow, variation=:variation, combos=:combos, crash=:crash");
    $stmt->bindParam(':voter', $_POST['hiddenidentifier']);
    $stmt->bindParam(':performance', $_POST['performance']);
    $stmt->bindParam(':risk', $_POST['risk']);
    $stmt->bindParam(':flow', $_POST['flow']);
    $stmt->bindParam(':variation', $_POST['variation']);
    $stmt->bindParam(':combos', $_POST['combos']);
    $stmt->bindParam(':crash', $_POST['crash']);

    $stmt->execute();

    echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
