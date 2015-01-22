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


        $asd = array();
        var_dump($asd);


        foreach ($infos as $info) {

            echo $info["flode"] . "<br>";
//                header("Location: index.php");
        }
             
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "add") {
                $add = "INSERT INTO nyhet (flode) VALUES ('" . $_GET["input"] . "')";
                $stmt = $dbm->prepare($add);
                $stmt->execute();
//                $addflode = $_GET["input"];
//                $asd[] = array($addflode);
//                var_dump($asd);
            }
            if ($_GET["action"] == "delete") {
                $delete = "DELETE FROM nyhet WHERE id='" . $info["id"] . "'";
                $stmt = $dbm->prepare($delete);
                $stmt->execute();
            }
        } else {
            
        }
        var_dump($asd);


        echo "<form method='GET'>";
        echo "<input type='text' placeholder='rubrik' name='rubrik'";
        echo "<br>";
        echo "<textarea name='input' required></textarea>";
        echo "<br>";
        echo "<input type='submit' name='action' value='add'>";
        echo "<br><br>";
        echo "</form>";
        echo "<form id='delete' method='GET'>";
        echo "<input type='text' placeholder='lol' name='id'>";
        echo "<br>";
        echo "<input type='submit' name='action' value='delete'>";
        echo "</form>";

        for ($i = 0; $i < count($asd); $i++) {
            echo date(" " . 'Y-m-d H:i');
            echo "<br>";
            echo $asd[$i];

            echo "<br><br>";
        }
        ?>
    </body>
</html>
