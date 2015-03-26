<!DOCTYPE>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "db.php";
        include "getData.php";
        echo "infos:";

        var_dump($infos);
        echo "<br>";
        echo "get";

        var_dump($_GET);

        foreach ($infos as $info) {
            echo $info["rubrik"] . "<br>";
            echo $info["flode"] . "<br>";
            echo $info["tid"] . "<br>";
            echo $info["filnamn"] . "<br>";
        }

        echo "<form method='GET' action='editsave.php'>";
        echo "<input type='hidden' value='" . $info['id'] . "' name='id'>";
        echo "<input type='text' placeholder='rubrik' name='rubrik' value='" . $info['rubrik'] . "'";
        echo "<br><br>";
        echo "<textarea name='flode'required>" . $info['flode'] . "</textarea>";
        echo "<br>";
        echo "<p id='filnamnVisa'></p>";
        echo "<input type='submit' name='action' value='Save'>" . "<br>";
        echo "<input type='hidden' name='filnamn' value='" . $info['filnamn'] . "' id='filnamn'>";
        echo "</form>";
        ?>

        <form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
            <input name="FileInput" id="FileInput" type="file" />
            <input type="submit"  id="submit-btn" value="Upload" />
            <img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>

        </form>

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script src="uploadfile.js"></script>
    </body>
</html>