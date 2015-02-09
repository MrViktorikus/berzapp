<?php

include "db.php";

$sql = "SELECT * FROM nyhet";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":flode", $flode);
$stmt->execute();
$infos = $stmt->fetchAll();

if (isset($_GET["action"])) {
    if ($_GET["action"] == "add") {
        $add = "INSERT INTO nyhet (flode, rubrik, filnamn) VALUES ('" . $_GET["input"] . "','" . $_GET["rubrik"] . "', '" . $_GET["filnamn"] . "')";
        $stmt = $dbm->prepare($add);
        $stmt->execute();
        header("Location: index.php");
    }
}
