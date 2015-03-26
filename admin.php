<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        include "db.php";
        include "getData.php";

        $flode = filter_input(INPUT_GET, 'flode', FILTER_SANITIZE_SPECIAL_CHARS);
        ?>
        <div id="wrapper">

            <?php
            echo "<br>" . "<a href='add.php'>Lägg till nyhet</a>";
            echo "<br>" . "<a href='admin.php'>Uppdatera Resultat</a>";
            echo "<br>" . "<a href='index.php'>Tillbaks till startsidan</a>";
            foreach ($infos as $info) {
                echo "<div class='content'>";
                include "content.php";
                echo "<form method='GET'>";
                echo "<input type='hidden' value='" . $info["id"] . "' name='id'>";
                echo "<input type='submit' name='action' value='delete'>";
                echo "</form>";
                echo "<form method='GET' action='edit.php'>";
                echo "<input type='hidden' value='" . $info["id"] . "' name='id'>";
                echo "<input type='submit' name='action' value='edit'>";
                echo "</form>";
                echo "</div>";
            }
            if (isset($_GET["action"])) {

                if ($_GET["action"] == "delete") {
                    $delete = "DELETE FROM nyhet WHERE id='" . $_GET["id"] . "'";
                    $stmt = $dbm->prepare($delete);
                    $stmt->execute();
                    header("Location: admin.php");
                }
            }
            
            ?>
        </div>
    </body>
</html>
