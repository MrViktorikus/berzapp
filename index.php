<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "db.php";
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "add") {
                $add = "INSERT INTO flode (nyhet) VALUES ('" . $_GET["input"] . "')";
                $stmt = $dbm->prepare($add);
                $stmt->execute();
//                var_dump($add);
            }
            if ($_POST["action"] == "delete") {
                $delete = "DELETE FROM flode WHERE id='" . $product["id"] . "'";
                $stmt = $dbm->prepare($delete);
                $stmt->execute();
            }
        } else {
            
        }



        $sql = "SELECT * FROM flode";
        $stmt = $dbm->prepare($sql);
        $stmt->bindParam(":nyhet", $nyhet);
        $stmt->execute();
        $infos = $stmt->fetchAll();

        $nyhet = filter_input(INPUT_GET, 'nyhet', FILTER_SANITIZE_SPECIAL_CHARS);

        foreach ($infos as $info) {
            foreach ($info as $i) {
                echo $i . "<br>";
//                header("Location: index.php");
            }
        }


        echo "<form method='GET'>
        <textarea name='input' required></textarea>
        <br>
        <input type='submit' name='action' value='add'>
        </form>";
        ?>
    </body>
</html>
