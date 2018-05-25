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
      ("deadly"), ("frozen"), ("planet"), ("proper"), ("excess"), ("ferry"), ("rocket"), ("rubbish"), ("distort"), ("pillow"), ("deter"), ("impact"), ("pastel"), ("blue jean"), ("kinship"), ("aloof"), ("station"), ("writer"), ("pudding"), ("cover"), ("fortune"), ("plaster"), ("crystal"), ("version"), ("period"), ("river"), ("adjust"), ("freshman"), ("access"), ("default"), ("habit"), ("muscle"), ("constant"), ("dentist"), ("perform"), ("translate"), ("cherry"), ("sale"), ("worker"), ("graduate"), ("menu"), ("rumor"), ("conscience"), ("woman"), ("nonsense"), ("helpless"), ("limit"), ("dribble"), ("baby"), ("appeal"), ("advice"), ("physics"), ("deprive"), ("import"), ("central"), ("object"), ("protest"), ("relief"), ("receipt"), ("question"), ("pole"), ("decay"), ("mutual"), ("elapse"), ("begin"), ("studio"), ("expect"), ("chorus"), ("danger"), ("language"), ("faithful"), ("breakfast"), ("latest"), ("apple"), ("legend"), ("order"), ("portrait"), ("meadow"), ("traction"), ("courage"), ("function"), ("surround"), ("kitchen"), ("pilot"), ("payment"), ("item"), ("childish"), ("champion"), ("adopt"), ("second"), ("respect"), ("haircut"), ("headline"), ("tile"), ("queen"), ("rugby"), ("bargain"), ("compound"), ("trouble"), ("basket"), ("warrant"), ("restrict"), ("work out"), ("pepper"), ("center"), ("chapter"), ("despise"), ("effort"), ("produce"), ("affair"), ("landscape"), ("power"), ("hobby"), ("divorce"), ("treatment"), ("utter"), ("virtue"), ("carry"), ("contempt"), ("retired"), ("column"), ("breakdown"), ("spectrum"), ("precede"), ("knowledge"), ("petty"), ("voter"), ("acquit"), ("finance"), ("matter"), ("happen"), ("excuse"), ("quarrel"), ("confront"), ("rotten"), ("surgeon"), ("audience"), ("minor"), ("temple"), ("corner"), ("body"), ("response"), ("axis"), ("future"), ("confine"), ("motif"), ("complain"), ("manual"), ("bottom"), ("agent")');
    $stmt->execute();
    echo "Voters table updated";

    $stmt = $conn->prepare( 'INSERT INTO Performances (name, performer) VALUES 
      ("Erik Lydig 1","Erik Lydig"), ("Erik Lydig 2","Erik Lydig"), ("Erik Lydig 3","Erik Lydig"),
      ("Niklas Norberg 1","Niklas Norberg"), ("Niklas Norberg 2","Niklas Norberg"), ("Niklas Norberg 3","Niklas Norberg"),
      ("Oscar Nilsson 1","Oscar Nilsson"), ("Oscar Nilsson 2","Oscar Nilsson"), ("Oscar Nilsson 3","Oscar Nilsson"),
      ("Kim Thorup 1","Kim Thorup"), ("Kim Thorup 2","Kim Thorup"), ("Kim Thorup 3","Kim Thorup"),
      ("Pål Nilsson 1","Pål Nilsson"), ("Pål Nilsson 2","Pål Nilsson"), ("Pål Nilsson 3","Pål Nilsson"),
      ("Emil Augustsson 1","Emil Augustsson"), ("Emil Augustsson 2","Emil Augustsson"), ("Emil Augustsson 3","Emil Augustsson"),
      ("Alexander Blacker 1","Alexander Blacker"), ("Alexander Blacker 2","Alexander Blacker"), ("Alexander Blacker 3","Alexander Blacker"),
      ("Per-Henrik Lundblom 1","Per-Henrik Lundblom"), ("Per-Henrik Lundblom 2","Per-Henrik Lundblom"), ("Per-Henrik Lundblom 3","Per-Henrik Lundblom"),
      ("Ba Sem 1","Ba Sem"), ("Ba Sem 2","Ba Sem"), ("Ba Sem 3","Ba Sem"),
      ("Felix Gordon 1","Felix Gordon"), ("Felix Gordon 2","Felix Gordon"), ("Felix Gordon 3","Felix Gordon"),
      ("Hussein Ali 1","Hussein Ali"), ("Hussein Ali 2","Hussein Ali"), ("Hussein Ali 3","Hussein Ali"),
      ("Magnus Cederfeldt 1","Magnus Cederfeldt"), ("Magnus Cederfeldt 2","Magnus Cederfeldt"), ("Magnus Cederfeldt 3","Magnus Cederfeldt"),
      ("Kim Hallum 1","Kim Hallum"), ("Kim Hallum 2","Kim Hallum"), ("Kim Hallum 3","Kim Hallum"),
      ("Ted Elmenheim 1","Ted Elmenheim"), ("Ted Elmenheim 2","Ted Elmenheim"), ("Ted Elmenheim 3","Ted Elmenheim"),
      ("Radek Rembowski 1","Radek Rembowski"), ("Radek Rembowski 2","Radek Rembowski"), ("Radek Rembowski 3","Radek Rembowski"),
      ("Jacob Lantz 1","Jacob Lantz"), ("Jacob Lantz 2","Jacob Lantz"), ("Jacob Lantz 3","Jacob Lantz"),
      ("Olivia Nilsson 1","Olivia Nilsson"), ("Olivia Nilsson 2","Olivia Nilsson"), ("Olivia Nilsson 3","Olivia Nilsson"),
      ("Elliot Nilsson 1","Elliot Nilsson"), ("Elliot Nilsson 2","Elliot Nilsson"), ("Elliot Nilsson 3","Elliot Nilsson"),

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
      ("deadly"), ("frozen"), ("planet"), ("proper"), ("excess"), ("ferry"), ("rocket"), ("rubbish"), ("distort"), ("pillow"), ("deter"), ("impact"), ("pastel"), ("blue jean"), ("kinship"), ("aloof"), ("station"), ("writer"), ("pudding"), ("cover"), ("fortune"), ("plaster"), ("crystal"), ("version"), ("period"), ("river"), ("adjust"), ("freshman"), ("access"), ("default"), ("habit"), ("muscle"), ("constant"), ("dentist"), ("perform"), ("translate"), ("cherry"), ("sale"), ("worker"), ("graduate"), ("menu"), ("rumor"), ("conscience"), ("woman"), ("nonsense"), ("helpless"), ("limit"), ("dribble"), ("baby"), ("appeal"), ("advice"), ("physics"), ("deprive"), ("import"), ("central"), ("object"), ("protest"), ("relief"), ("receipt"), ("question"), ("pole"), ("decay"), ("mutual"), ("elapse"), ("begin"), ("studio"), ("expect"), ("chorus"), ("danger"), ("language"), ("faithful"), ("breakfast"), ("latest"), ("apple"), ("legend"), ("order"), ("portrait"), ("meadow"), ("traction"), ("courage"), ("function"), ("surround"), ("kitchen"), ("pilot"), ("payment"), ("item"), ("childish"), ("champion"), ("adopt"), ("second"), ("respect"), ("haircut"), ("headline"), ("tile"), ("queen"), ("rugby"), ("bargain"), ("compound"), ("trouble"), ("basket"), ("warrant"), ("restrict"), ("work out"), ("pepper"), ("center"), ("chapter"), ("despise"), ("effort"), ("produce"), ("affair"), ("landscape"), ("power"), ("hobby"), ("divorce"), ("treatment"), ("utter"), ("virtue"), ("carry"), ("contempt"), ("retired"), ("column"), ("breakdown"), ("spectrum"), ("precede"), ("knowledge"), ("petty"), ("voter"), ("acquit"), ("finance"), ("matter"), ("happen"), ("excuse"), ("quarrel"), ("confront"), ("rotten"), ("surgeon"), ("audience"), ("minor"), ("temple"), ("corner"), ("body"), ("response"), ("axis"), ("future"), ("confine"), ("motif"), ("complain"), ("manual"), ("bottom"), ("agent")');
    $stmt->execute();
    echo "Voters table updated";

    $stmt = $conn->prepare( 'INSERT INTO Performances (name, performer) VALUES 
      ("Erik Lydig 1","Erik Lydig"), ("Erik Lydig 2","Erik Lydig"), ("Erik Lydig 3","Erik Lydig"),
      ("Niklas Norberg 1","Niklas Norberg"), ("Niklas Norberg 2","Niklas Norberg"), ("Niklas Norberg 3","Niklas Norberg"),
      ("Oscar Nilsson 1","Oscar Nilsson"), ("Oscar Nilsson 2","Oscar Nilsson"), ("Oscar Nilsson 3","Oscar Nilsson"),
      ("Kim Thorup 1","Kim Thorup"), ("Kim Thorup 2","Kim Thorup"), ("Kim Thorup 3","Kim Thorup"),
      ("Pål Nilsson 1","Pål Nilsson"), ("Pål Nilsson 2","Pål Nilsson"), ("Pål Nilsson 3","Pål Nilsson"),
      ("Emil Augustsson 1","Emil Augustsson"), ("Emil Augustsson 2","Emil Augustsson"), ("Emil Augustsson 3","Emil Augustsson"),
      ("Alexander Blacker 1","Alexander Blacker"), ("Alexander Blacker 2","Alexander Blacker"), ("Alexander Blacker 3","Alexander Blacker"),
      ("Per-Henrik Lundblom 1","Per-Henrik Lundblom"), ("Per-Henrik Lundblom 2","Per-Henrik Lundblom"), ("Per-Henrik Lundblom 3","Per-Henrik Lundblom"),
      ("Ba Sem 1","Ba Sem"), ("Ba Sem 2","Ba Sem"), ("Ba Sem 3","Ba Sem"),
      ("Felix Gordon 1","Felix Gordon"), ("Felix Gordon 2","Felix Gordon"), ("Felix Gordon 3","Felix Gordon"),
      ("Hussein Ali 1","Hussein Ali"), ("Hussein Ali 2","Hussein Ali"), ("Hussein Ali 3","Hussein Ali"),
      ("Magnus Cederfeldt 1","Magnus Cederfeldt"), ("Magnus Cederfeldt 2","Magnus Cederfeldt"), ("Magnus Cederfeldt 3","Magnus Cederfeldt"),
      ("Kim Hallum 1","Kim Hallum"), ("Kim Hallum 2","Kim Hallum"), ("Kim Hallum 3","Kim Hallum"),
      ("Ted Elmenheim 1","Ted Elmenheim"), ("Ted Elmenheim 2","Ted Elmenheim"), ("Ted Elmenheim 3","Ted Elmenheim"),
      ("Radek Rembowski 1","Radek Rembowski"), ("Radek Rembowski 2","Radek Rembowski"), ("Radek Rembowski 3","Radek Rembowski"),
      ("Jacob Lantz 1","Jacob Lantz"), ("Jacob Lantz 2","Jacob Lantz"), ("Jacob Lantz 3","Jacob Lantz"),
      ("Olivia Nilsson 1","Olivia Nilsson"), ("Olivia Nilsson 2","Olivia Nilsson"), ("Olivia Nilsson 3","Olivia Nilsson"),
      ("Elliot Nilsson 1","Elliot Nilsson"), ("Elliot Nilsson 2","Elliot Nilsson"), ("Elliot Nilsson 3","Elliot Nilsson"),

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
