<!DOCTYPE html>
<html>
    <head>
        <title>Nyhetsflöde</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>


        <form method='GET' action="addAction.php">
            <input type='text' placeholder='rubrik' name='rubrik'>
            <br><br>
            <textarea name='input' required></textarea>
            <br>
            <p id='filnamnVisa'></p>
            <input type='submit' name='action' value='add'>
            <br><br>
            <input type='hidden' name='filnamn' value='' id='filnamn'>
        </form>

        <form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
            <input name="FileInput" id="FileInput" type="file" />
            <input type="submit"  id="submit-btn" value="Upload" />
            <img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>

        </form>
        <div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script src="uploadfile.js"></script>
    </body>
</html>