<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "db.php";


        $sql = "SELECT * FROM nyhet";
        $stmt = $dbm->prepare($sql);
        $stmt->bindParam(":flode", $flode);
        $stmt->execute();
        $infos = $stmt->fetchAll();

        $flode = filter_input(INPUT_GET, 'flode', FILTER_SANITIZE_SPECIAL_CHARS);

        foreach ($infos as $info) {
            echo $info["rubrik"] . "<br>";
//            echo $info["filnamn"] . "<br>";
            echo "<img src='img/" . $info["filnamn"] . "' alt='Spa' width='100'>" . "<br>x";
            echo $info["flode"] . "<br>";
            echo $info["tid"] . "<br>";
//            echo $info["filnamn"] . "<br>";
//                header("Location: index.php");
            echo "<form method='GET'>";
            echo "<input type='hidden' value='" . $info["id"] . "' name='id'>";
            echo "<input type='submit' name='action' value='delete'>";
            echo "</form>";
            echo "<form method='GET' action='edit.php'>";
            echo "<input type='hidden' value='" . $info["id"] . "' name='id'>";
            echo "<input type='submit' name='action' value='edit'>";
            echo "</form>";
        }

        if (isset($_GET["action"])) {

            if ($_GET["action"] == "delete") {
                $delete = "DELETE FROM nyhet WHERE id='" . $_GET["id"] . "'";
                $stmt = $dbm->prepare($delete);
                $stmt->execute();
                header("Location: index.php");
            }
        }





//        echo "<form method='post' enctype='multipart/form-data'>";
//        echo "<input type='text' placeholder='rubrik' name='rubrik'";
//        echo "<br><br>";
//        echo "<textarea name='input' required></textarea>";
//        echo "<br>";
//        echo "Select image to upload: ";
//        echo "<input type='file' name='fileToUpload' id='fileToUpload'>";
//        echo "<input type='submit' name='action' value='add'>";
//        echo "<br><br>";
//        echo "</form>";
        echo "<br>" . "<a href='index.php'>Uppdatera Resultat</a>";
        echo "<br>" . "<a href='add.php'>Lägg till nyhet</a>";
        ?>

        <!--<form action="upload.php" method="post" enctype="multipart/form-data">-->
        <!--Select image to upload:-->
        <!--<input type="file" name="fileToUpload" id="fileToUpload">-->
        <!--<input type="submit" value="Upload Image" name="submit">-->
        <!--</form>-->
    </body>
</html>
