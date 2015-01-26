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
                $edit = "UPDATE nyhet SET flode='" . $_GET["input"] . "', rubrik='" . $_GET["rubrik"] . "' WHERE id='" . $_GET["id"] . "'";
                $stmt = $dbm->prepare($edit);
                $stmt->execute();
                header("Location: index.php");
                var_dump($edit);
            }
        } else {
            
        }
       

     


        echo "<form method='GET'>";
        echo "<input type='text' placeholder='rubrik' name='rubrik'";
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
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </body>
</html>
