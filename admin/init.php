<?php
    require_once("../connect.inc.php");

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $stmt = $conn->prepare( "truncate Votes");
    // $stmt->execute();
    // echo "Cleared Votes table";

    $stmt = $conn->prepare( "truncate Performances");
    $stmt->execute();
    echo "Cleared Performancers table";

    $stmt = $conn->prepare( "truncate Voters");
    $stmt->execute();
    echo "Cleared Voters table";

    $stmt = $conn->prepare( 'INSERT INTO Voters (name) VALUES 
      ("perfume"), ("circle"), ("intention"), ("staff"), ("fruit"), ("tone"),
      ("image"), ("declaration"), ("fiction"), ("glacier"), ("back"), ("constitution"),
      ("essay"), ("grandmother"), ("plead"), ("costume"), ("limit"), ("therapist"),
      ("mosaic"), ("impulse"), ("pastel"), ("spill"), ("replacement"), ("layout"),
      ("rabbit"), ("passage"), ("story"), ("examination"), ("punish"), ("football"),
      ("disappointment"), ("magnetic"), ("dip"), ("eyebrow"), ("different"), ("wisecrack"),
      ("ivory"), ("minute"), ("pudding"), ("spokesperson"), ("pan"), ("claim"),
      ("pile"), ("rotate"), ("splurge"), ("asylum"), ("inspiration"), ("reasonable"),
      ("gold"), ("decorative"), ("fashion"), ("species"), ("issue"), ("judgment"),
      ("allow"), ("norm"), ("predict"), ("medium"), ("calculation"), ("crutch"),
      ("pawn"), ("opposite"), ("evening"), ("prosecution"), ("slide"), ("ribbon"),
      ("thanks"), ("hole"), ("leg"), ("scene"), ("announcement"), ("constant"),
      ("exclusive"), ("dismissal"), ("obligation"), ("torch"), ("reactor"), ("polite"),
      ("magazine"), ("predator"), ("plant"), ("secretion"), ("link"), ("curl"),
      ("support"), ("quantity"), ("warn"), ("revoke"), ("understand"), ("flow"),
      ("sickness"), ("diameter"), ("deputy"), ("map"), ("captivate"), ("harmony"),
      ("feedback"), ("contemporary"), ("related"), ("retain"), ("hall"), ("health"),
      ("session"), ("nightmare"), ("unfair"), ("weapon"), ("deep"), ("achievement"),
      ("electron"), ("district"), ("substitute"), ("dish"), ("shake"), ("quotation"),
      ("wait"), ("fine"), ("disposition"), ("listen"), ("sentiment"), ("charm"),
      ("insure"), ("default"), ("certain"), ("feel"), ("labour"), ("helicopter"),
      ("angel"), ("delete"), ("central"), ("secular"), ("series"), ("injection"),
      ("painter"), ("accept"), ("eye"), ("bride"), ("weave"), ("rain"),
      ("prey"), ("drink"), ("dignity"), ("favorable"), ("spell"), ("take"),
      ("analyst")');
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
