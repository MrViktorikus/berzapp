<?php

include "db.php";
include "getData.php";


if (isset($_GET["action"])) {
    if ($_GET["action"] == "add") {
        var_dump($_GET["filnamn"]);
        $add = "INSERT INTO nyhet (flode, rubrik, filnamn) VALUES ('" . $_GET["input"] . "','" . $_GET["rubrik"] . "', '" . $_GET["filnamn"] . "')";
        $stmt = $dbm->prepare($add);
        $stmt->execute();
        header("Location: admin.php");
    }
}
