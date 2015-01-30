<?php

include "db.php";

$sql = "SELECT * FROM nyhet WHERE id='" . $_GET["id"] . "'";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":flode", $flode);
$stmt->execute();
$infos = $stmt->fetchAll();
echo "infos:";
var_dump($infos);
echo "<br>";
echo "get";

var_dump($_GET);

foreach ($infos as $info) {
    echo $info["rubrik"] . "<br>";
    echo $info["flode"] . "<br>";
    echo $info["tid"] . "<br>";
//            echo $info["filnamn"] . "<br>";
//                header("Location: index.php");
    echo "<form method='GET'>";
    echo "<input type='hidden' value='" . $info["id"] . "' name='id'>";
    echo "</form>";
}

echo "<form method='GET' action='editsave.php'>";
echo "<input type='hidden' value='" . $info['id'] . "' name='id'>";
echo "<input type='text' placeholder='rubrik' name='rubrik' value='" . $info['rubrik'] . "'";
echo "<br><br>";
echo "<textarea name='flode'required>" . $info['flode'] . "</textarea>";
echo "<br>";
echo "<input type='submit' name='action' value='Save'>";
echo "</form>";
echo "<a href='index.php'>Uppdatera Resultat</a>";
?>