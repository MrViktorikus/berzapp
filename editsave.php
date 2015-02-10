<?php

include "db.php";

if (isset($_GET["action"])) {
    if ($_GET["action"] == "Save") {
        $edit = "UPDATE nyhet SET rubrik='" . $_GET['rubrik'] . "',flode='" . $_GET['flode'] . "',filnamn='" . $_GET["filnamn"] . "' WHERE id='" . $_GET['id'] . "'";
        $stmt = $dbm->prepare($edit);
        $stmt->execute();
        header("Location: index.php");
    }
}
