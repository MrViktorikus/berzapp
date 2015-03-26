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
        include "delete.php";

        $flode = filter_input(INPUT_GET, 'flode', FILTER_SANITIZE_SPECIAL_CHARS);
        ?>
        <div id="wrapper">

            <?php
            foreach ($infos as $info) {
                echo "<div class='content'>";
                include "content.php";
                echo "</div>";
            }

//            echo "<br>" . "<a href='index.php'>Uppdatera Resultat</a>";
//            echo "<br>" . "<a href='add.php'>Lägg till nyhet</a>";
            ?>
        </div>
    </body>
</html>
