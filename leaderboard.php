<html>
  <head>
    <title> Drone Freestyle Challenge </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <img src="assets/header.jpg" width="100%" class="grid-width" />

    <div class="jumbotron grid-width">
      <div class="container-fluid">
        <h1> Drone Freestyle Challenge </h1>
      </div>
    </div>

    <div class="container-fluid">

      <div id="results" class="well">
        <table class='table'>
          <thead><tr><td>Framträdande:</td><td>Poäng:</td></tr></thead>
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

              foreach( $result as $row ) {
                echo "<tr>";
                echo "<td>".$row['performance']."</td>";
                echo "<td>".$row['average']."</td>";
                echo "</tr>";
              }

          } catch(PDOException $e) {
              echo $sql . "<br>" . $e->getMessage();
          }

          $conn = null;
          ?>
        </table>
        <button type="button" onclick="location.href='leaderboard.php';" id="leaderboardbutton" class="btn btn-block"> UPPDATERA </button>
      </div>

      <div id="leaderboard" class="well">
        <button type="button" onclick="location.href='index.php';" id="leaderboardbutton" class="btn btn-block"> GO TO VOTING </button>
      </div>

      </div>
    <img src="assets/footer.jpg" width="100%" class="grid-width" />
  </body>
</html>
