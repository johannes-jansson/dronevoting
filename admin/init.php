<?php
    require_once("../connect.inc.php");

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare( "truncate Votes");
    $stmt->execute();
    echo "Cleared Votes table";

    $stmt = $conn->prepare( "truncate Performances");
    $stmt->execute();
    echo "Cleared Performancers table";

    $stmt = $conn->prepare( "truncate Voters");
    $stmt->execute();
    echo "Cleared Voters table";

    $stmt = $conn->prepare( 'INSERT INTO Voters (name) VALUES ("mossa"), 
      ("verklighet"), ("sammandrag"), ("sterilisering"), ("budgivning"),
      ("regeringsbildning"), ("halvmil"), ("spjut"), ("miljard"), ("systerfartyg"),
      ("mossa"), ("systemvetenskap"), ("bakelit"), ("sammankallande"), ("mediaspelare"),
      ("gavel"), ("krut"), ("hippie"), ("samklang"), ("budgivning"),
      ("regeringsbildning"), ("alfa"), ("ishall"), ("konstgalleri"), ("oas"), ("gjutning"),
      ("lantarbetare"), ("sammankallande"), ("mp3"), ("garant")');
    $stmt->bindParam(':voter', $_POST['hiddenidentifier']);
    $stmt->bindParam(':performance', $_POST['performance']);
    $stmt->bindParam(':flow', $_POST['flow']);
    $stmt->bindParam(':tech', $_POST['tech']);
    $stmt->bindParam(':risk', $_POST['risk']);
    $stmt->execute();
    echo "Voters table updated";

    $stmt = $conn->prepare( 'INSERT INTO Performances (name) VALUES ("emil"), ("janzon")');
    $stmt->bindParam(':voter', $_POST['hiddenidentifier']);
    $stmt->bindParam(':performance', $_POST['performance']);
    $stmt->bindParam(':flow', $_POST['flow']);
    $stmt->bindParam(':tech', $_POST['tech']);
    $stmt->bindParam(':risk', $_POST['risk']);
    $stmt->execute();
    echo "Voters table updated";

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
