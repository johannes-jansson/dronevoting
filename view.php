<?php
    require_once("connect.inc.php");

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare("select performance, (avg(risk)+avg(flow)+avg(variation)+avg(combos))/4-5*crash as average
      from Votes where Votes.voter in (select name from Voters) group by performance order by average desc;");
    $stmt->execute();
    $result = $stmt->fetchAll();

    echo "<table>";
    foreach( $result as $row ) {
      echo "<tr>";
      echo "<td>".$row['performance']."</td>";
      echo "<td>".$row['average']."</td>";
      echo "</tr>";
    }
    echo "</table>";

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
