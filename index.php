<html>
  <head>
    <title> Drone Freestyle Challenge </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="lib/jquery.min.js"></script>
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <script src="lib/bootstrap.min.js"></script>
    <link href="lib/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="lib/bootstrap-toggle.min.js"></script>

    <script src="app.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <img src="assets/header.jpg" width="100%" class="grid-width"/>

    <div class="jumbotron grid-width">
      <div class="container-fluid">
        <h1> Drone Freestyle Challenge </h1>
      </div>
    </div>

    <div class="container-fluid">

      <div id="login" class="well">
        <div class="form-group">
          <label for="identifier">Kod:</label>
          <input type="text" id="identifier" name="identifier" class="form-control">
        </div>

        <div class="form-group">
          <button type="button" id="loginbutton" class="btn btn-block">LOGGA IN</button>
        </div>
      </div>


      <div id="form" class="well hide">
        <!--<form method="post" action="post.php">-->
        <form>
          <input type="hidden" name="hiddenidentifier" id="hiddenidentifier"></input>
          <div class="form-group">
          <label for="performance">Uppträdande:</label>
          <!-- should be done like this: https://www.w3schools.com/bootstrap/bootstrap_dropdowns.asp -->
          <select name="performance" id="selectperformance" class="form-control">
            <?php
                require_once("connect.inc.php");

            try {
                $conn = new PDO("mysql:host=$host;dbname=$database", $userName, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("select name from Performances;");
                $stmt->execute();
                $result = $stmt->fetchAll();

                foreach( $result as $row ) {
                  echo "<option value='".$row['name']."'>".$row['name']."</option>";
                }

            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }

            $conn = null;
            ?>
          </select>
          </div>

          <div class="form-group">
          <label for="risk">Risk: <output id="risko">5</output></label>
          <input name="risk" id="risk" type="range" value="5" min="1" max="10" step="1"
            oninput="risko.value = risk.value"/>
          </div>

          <div class="form-group">
          <label for="flow">Flow: <output id="flowo">5</output></label>
          <input name="flow" id="flow" type="range" value="5" min="1" max="10" step="1"
            oninput="flowo.value = flow.value"/>
          </div>

          <div class="form-group">
          <label for="variation">Variation: <output id="variationo">5</output></label>
          <input name="variation" id="variation" type="range" value="5" min="1" max="10" step="1"
            oninput="variationo.value = variation.value"/>
          </div>

          <div class="form-group">
          <label for="combos">Combos: <output id="comboso">5</output></label>
          <input name="combos" id="combos" type="range" value="5" min="1" max="10" step="1"
            oninput="comboso.value = combos.value"/>
          </div>

          <div class="form-group">
          <label for="crash">Krasch: </label>
          <input name="crash" id="crash" type="hidden" value=0 />
          <input name="crash" id="crash" data-toggle="toggle" type="checkbox" value=1
            data-on="Krash" data-onstyle="warning" data-off="Inte krash" data-offstyle="success" data-width="100%"/>
          </div>

          <!--
          <label for="innovation">Innovation:</label>
          <input id="innovation" type="range" min="1" max="10" step="1" />

          <br />

          <label for="variation">Variation:</label>
          <input id="variation" type="range" min="1" max="10" step="1" />

          <br />

          <label for="intensity">Intensity:</label>
          <input id="intensity" type="range" min="1" max="10" step="1" />

          <br />
          -->

          <div class="form-group">
          	<div class="button">
          	  <button type="button" id="votebutton" class="btn btn-block">RÖSTA</button>
          	</div>
          </div>

        </form>
      </div>

      <div id="voted" class="well hide">
        <h2> Tack för din röst! </h2>
        <button type="button" id="again" class="btn btn-block"> RÖSTA IGEN </button>
      </div>


      <div id="leaderboard" class="well">
        <button type="button" id="signoutbutton" class="btn btn-block hide"> LOGGA UT </button>
        <button type="button" onclick="location.href='leaderboard.php';" id="leaderboardbutton" class="btn btn-block"> LEADERBOARD </button>
      </div>

      </div>
    <img src="assets/footer.jpg" width="100%" class="grid-width" />
  </body>
</html>
