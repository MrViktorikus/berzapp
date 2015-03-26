<?php
if (isset($_GET["action"])) {

                if ($_GET["action"] == "delete") {
                    $delete = "DELETE FROM nyhet WHERE id='" . $_GET["id"] . "'";
                    $stmt = $dbm->prepare($delete);
                    $stmt->execute();
                    header("Location: index.php");
                }
            }