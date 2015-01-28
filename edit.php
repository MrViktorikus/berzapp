<?php

include "db.php";

$sql = "SELECT * FROM nyhet WHERE id='" . $_GET["id"] . "'";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":flode", $flode);
$stmt->execute();
$infos = $stmt->fetchAll();

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
if (isset($_GET["action"])) {
    if ($_GET["action"] == "edit") {
        $edit = "UPDATE nyhet SET flode='".$_GET['rubrik']."',flode='".$_GET['flod']."' WHERE id='".$_GET['id']."'";   
        $stmt = $dbm->prepare($edit);
        $stmt->execute();
//                var_dump($_GET["fileToUpload"]);
//                header("Location: index.php");
    }
}

    echo "<form method='GET'>";
    echo "<input type='hidden' value='" . $info['id'] . "' name='id'>";
    echo "<input type='text' placeholder='rubrik' name='rubrik' value='" . $info['rubrik'] . "'";
    echo "<br><br>";
    echo "<textarea name='input'required>" . $info['flode'] . "</textarea>";
    echo "<br>";
    echo "<input type='submit' name='action' value='edit'>";
    echo "</form>";
?>