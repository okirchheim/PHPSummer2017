<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- The data encoding type, enctype, MUST be specified as below -->
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            <!-- MAX_FILE_SIZE must precede the file input field -->
            <input type="hidden" name="MAX_FILE_SIZE" value="300000" 
            <!-- Name of input element determines name in $_FILES array -->
            Send this file: <input name="upfile" type="file" />
            <input type="submit" value="Send File" />
        </form>

        
    </body>
</html>