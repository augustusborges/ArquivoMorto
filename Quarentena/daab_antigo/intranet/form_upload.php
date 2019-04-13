<?php


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Upload Arquivo</title>
    </head>
    <body>
        <!-- The data encoding type, enctype, MUST be specified as below -->
        <form enctype="multipart/form-data" action="receive_upload.php" method="POST">
            <!-- MAX_FILE_SIZE must precede the file input field -->
            <input type="hidden" name="MAX_FILE_SIZE" value="600000" /><br/>
            <!-- Name of input element determines name in $_FILES array -->
            Enviar arquivo: <input type="file" name="userfile"/><br/>
            <input type="submit" value="Enviar Arquivo" />
        </form>    
    </body>
</html>



