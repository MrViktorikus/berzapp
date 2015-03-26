<?php

$sql = "SELECT * FROM nyhet";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":flode", $flode);
$stmt->execute();
$infos = $stmt->fetchAll();