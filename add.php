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
echo "<form method='GET'>";
echo "<input type='text' placeholder='rubrik' name='rubrik'";
echo "<br><br>";
echo "<textarea name='input' required></textarea>";
echo "<br>";
echo "<input type='submit' name='action' value='add'>";
echo "</form>";
?>

