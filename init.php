<?php
    require_once("connect.inc.php");

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
    $stmt->execute();
    echo "Voters table updated";

    $stmt = $conn->prepare( 'INSERT INTO Performances (name, performer) VALUES 
      ("Kim Thorup 1","Kim Thorup"), ("Kim Thorup 2","Kim Thorup"), ("Kim Thorup 3","Kim Thorup"),
      ("Jacob Lantz 1","Jacob Lantz"), ("Jacob Lantz 2","Jacob Lantz"), ("Jacob Lantz 3","Jacob Lantz"),
      ("Patrick Ryan 1","Patrick Ryan"), ("Patrick Ryan 2","Patrick Ryan"), ("Patrick Ryan 3","Patrick Ryan"),
      ("Alexander Blacker 1","Alexander Blacker"), ("Alexander Blacker 2","Alexander Blacker"), ("Alexander Blacker 3","Alexander Blacker"),
      ("Olivia Nilsson 1","Olivia Nilsson"), ("Olivia Nilsson 2","Olivia Nilsson"), ("Olivia Nilsson 3","Olivia Nilsson"),
      ("Erik Lydig 1","Erik Lydig"), ("Erik Lydig 2","Erik Lydig"), ("Erik Lydig 3","Erik Lydig"),
      ("Elliot Nilsson 1","Elliot Nilsson"), ("Elliot Nilsson 2","Elliot Nilsson"), ("Elliot Nilsson 3","Elliot Nilsson"),
      ("Pether Gustafsson 1","Pether Gustafsson"), ("Pether Gustafsson 2","Pether Gustafsson"), ("Pether Gustafsson 3","Pether Gustafsson"),
      ("Martin Nilsson 1","Martin Nilsson"), ("Martin Nilsson 2","Martin Nilsson"), ("Martin Nilsson 3","Martin Nilsson"),
      ("Emil Augustsson 1","Emil Augustsson"), ("Emil Augustsson 2","Emil Augustsson"), ("Emil Augustsson 3","Emil Augustsson"),
      ("Basem Sallenman 1","Basem Sallenman"), ("Basem Sallenman 2","Basem Sallenman"), ("Basem Sallenman 3","Basem Sallenman"),
      ("Mathias Abade 1","Mathias Abade"), ("Mathias Abade 2","Mathias Abade"), ("Mathias Abade 3","Mathias Abade"),
      ("Jonas Pedersen 1","Jonas Pedersen"), ("Jonas Pedersen 2","Jonas Pedersen"), ("Jonas Pedersen 3","Jonas Pedersen"),
      ("Andreas Holm 1","Andreas Holm"), ("Andreas Holm 2","Andreas Holm"), ("Andreas Holm 3","Andreas Holm"),

      ("Charpu 1","Charpu"), ("Charpu 2","Charpu"), ("Charpu 3","Charpu"),
      ("Johhny FPV 1","Johhny FPV"), ("Johhny FPV 2","Johhny FPV"), ("Johhny FPV 3","Johhny FPV"),
      ("Mattystuntz 1","Mattystuntz"), ("Mattystuntz 2","Mattystuntz"), ("Mattystuntz 3","Mattystuntz"),
      ("MrSteele 1","MrSteele"), ("MrSteele 2","MrSteele"), ("MrSteele 3","MrSteele"),
      ("Ummagawd 1","Ummagawd"), ("Ummagawd 2","Ummagawd"), ("Ummagawd 3","Ummagawd")
    ');
    $stmt->execute();
    echo "Voters table updated";

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
try {
    $conn = new PDO("mysql:host=$host;dbname=fpvwiki_se_dronevoting_backup", "fpvwiki_se_dronevoting_backup", "mrsteele");
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
    $stmt->execute();
    echo "Voters table updated";

    $stmt = $conn->prepare( 'INSERT INTO Performances (name, performer) VALUES 
      ("Kim Thorup 1","Kim Thorup"), ("Kim Thorup 2","Kim Thorup"), ("Kim Thorup 3","Kim Thorup"),
      ("Jacob Lantz 1","Jacob Lantz"), ("Jacob Lantz 2","Jacob Lantz"), ("Jacob Lantz 3","Jacob Lantz"),
      ("Patrick Ryan 1","Patrick Ryan"), ("Patrick Ryan 2","Patrick Ryan"), ("Patrick Ryan 3","Patrick Ryan"),
      ("Alexander Blacker 1","Alexander Blacker"), ("Alexander Blacker 2","Alexander Blacker"), ("Alexander Blacker 3","Alexander Blacker"),
      ("Olivia Nilsson 1","Olivia Nilsson"), ("Olivia Nilsson 2","Olivia Nilsson"), ("Olivia Nilsson 3","Olivia Nilsson"),
      ("Erik Lydig 1","Erik Lydig"), ("Erik Lydig 2","Erik Lydig"), ("Erik Lydig 3","Erik Lydig"),
      ("Elliot Nilsson 1","Elliot Nilsson"), ("Elliot Nilsson 2","Elliot Nilsson"), ("Elliot Nilsson 3","Elliot Nilsson"),
      ("Pether Gustafsson 1","Pether Gustafsson"), ("Pether Gustafsson 2","Pether Gustafsson"), ("Pether Gustafsson 3","Pether Gustafsson"),
      ("Martin Nilsson 1","Martin Nilsson"), ("Martin Nilsson 2","Martin Nilsson"), ("Martin Nilsson 3","Martin Nilsson"),
      ("Emil Augustsson 1","Emil Augustsson"), ("Emil Augustsson 2","Emil Augustsson"), ("Emil Augustsson 3","Emil Augustsson"),
      ("Basem Sallenman 1","Basem Sallenman"), ("Basem Sallenman 2","Basem Sallenman"), ("Basem Sallenman 3","Basem Sallenman"),
      ("Mathias Abade 1","Mathias Abade"), ("Mathias Abade 2","Mathias Abade"), ("Mathias Abade 3","Mathias Abade"),
      ("Jonas Pedersen 1","Jonas Pedersen"), ("Jonas Pedersen 2","Jonas Pedersen"), ("Jonas Pedersen 3","Jonas Pedersen"),
      ("Andreas Holm 1","Andreas Holm"), ("Andreas Holm 2","Andreas Holm"), ("Andreas Holm 3","Andreas Holm"),

      ("Charpu 1","Charpu"), ("Charpu 2","Charpu"), ("Charpu 3","Charpu"),
      ("Johhny FPV 1","Johhny FPV"), ("Johhny FPV 2","Johhny FPV"), ("Johhny FPV 3","Johhny FPV"),
      ("Mattystuntz 1","Mattystuntz"), ("Mattystuntz 2","Mattystuntz"), ("Mattystuntz 3","Mattystuntz"),
      ("MrSteele 1","MrSteele"), ("MrSteele 2","MrSteele"), ("MrSteele 3","MrSteele"),
      ("Ummagawd 1","Ummagawd"), ("Ummagawd 2","Ummagawd"), ("Ummagawd 3","Ummagawd")
    ');
    $stmt->execute();
    echo "Voters table updated";

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
