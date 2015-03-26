<?php

echo "<div class='nils'>";
echo "<h1>" . $info["rubrik"] . "</h1>" . "<br>";
echo "<img src='img/" . $info["filnamn"] . "' alt='Corrupt File' width='350'>" . "<br>";
echo "<p>" . $info["flode"] . "</p>" . "<br>";
echo $info["tid"] . "<br>";
echo "</div>";