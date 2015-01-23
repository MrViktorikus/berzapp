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
            echo $info["flode"] . "<br>";
            echo $info["tid"] . "<br>" . "<br>";
//                header("Location: index.php");
            echo "<form method ='GET'>";
            echo "<input type='hidden' value='" . $info["id"] . "' name='id'>";
            echo "<input type='submit' name='action' value='delete'>";
            echo "<input type='submit' name='action' value='edit'>";
            echo "</form>";
        }

        $asd = array();
        var_dump($asd);




        if (isset($_GET["action"])) {
            if ($_GET["action"] == "add") {
                $add = "INSERT INTO nyhet (flode, rubrik) VALUES ('" . $_GET["input"] . "','" . $_GET["rubrik"] . "')";
                $stmt = $dbm->prepare($add);
                $stmt->execute();
                header("Location: index.php");
            }
            if ($_GET["action"] == "delete") {
                $delete = "DELETE FROM nyhet WHERE id='" . $_GET["id"] . "'";
                $stmt = $dbm->prepare($delete);
                $stmt->execute();
                header("Location: index.php");
            }
            if ($_GET["action"] == "edit") {
                $edit = "UPDATE products SET rubrik='" . $_GET["rubrik"] . "', flode='" . $_GET["flode"] . "' WHERE id=" . $_GET["id"];
                $stmt = $dbm->prepare($edit);
                $stmt->execute();
                header("Location: index.php");
                var_dump($edit);
            }
        } else {
            
        }
        var_dump($asd);

//        $target_dir = "img/";
//        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//        $uploadOk = 1;
//        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
//        if (isset($_GET["action"])) {
//            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//            if ($check !== false) {
//                echo "File is an image - " . $check["mime"] . ".";
//                $uploadOk = 1;
//            } else {
//                echo "File is not an image.";
//                $uploadOk = 0;
//            }
//        }


        echo "<form method='GET'>";
        echo "<input type='text' placeholder='rubrik' value='" . $info['rubrik'] . "' name='rubrik'";
        echo "<br><br>";
        echo "<textarea name='input' required></textarea>";
        echo "<br>";
        echo "<input type='submit' name='action' value='add'>";
        echo "<br><br>";
        echo "</form>";
//        echo "<form method='GET' enctype='multipart/form-data'>";
//        echo "<input name='file' placeholder='Add File' type='text'>";
//        echo "<input name='action' value='addFile' type='submit'>";
//        echo "</form>";
        echo "<br>" . "<a href='index.php'>Uppdatera Resultat</a>";
        ?>
        <img src="img/bild.jpg" alt="Spa" width="150">
    </body>
</html>
