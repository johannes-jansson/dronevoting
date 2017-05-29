<?php
    require_once("../connect.inc.php");

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    
    $stmt = $conn->prepare("select voter, performance, flow, tech, risk, tstamp,
      (avg(flow)+avg(tech)+avg(risk))/3 as average from Votes;");
    $stmt = $conn->prepare("select voter, performance, flow, tech, risk, tstamp, (flow + tech + risk)/3 as average from Votes;");
    $stmt->execute();
    $result = $stmt->fetchAll();

    //print_r($result);
    echo "<table>";
    echo "<tr><td>Voter</td><td>Performance</td><td>Flow</td><td>Tech</td><td>Risk</td><td>Avg</td><td>Time</td></tr>";
    foreach( $result as $row ) {
      echo "<tr>";
      echo "<td>".$row['voter']."</td>";
      echo "<td>".$row['performance']."</td>";
      echo "<td>".$row['flow']."</td>";
      echo "<td>".$row['tech']."</td>";
      echo "<td>".$row['risk']."</td>";
      echo "<td>".$row['average']."</td>";
      echo "<td>".$row['tstamp']."</td>";
      echo "</tr>";
    }
    echo "</table>";

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
