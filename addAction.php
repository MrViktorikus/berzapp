<?php
include "db.php";

$sql = "SELECT * FROM nyhet";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":flode", $flode);
$stmt->execute();
$infos = $stmt->fetchAll();

if (isset($_GET["action"])) {
    if ($_GET["action"] == "add") {
        $add = "INSERT INTO nyhet (flode, rubrik) VALUES ('" . $_GET["input"] . "','" . $_GET["rubrik"] . "')";
        $stmt = $dbm->prepare($add);
        $stmt->execute();
        header("Location: index.php");
    }
}
