<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form enctype="multipart/form-data" action="upload.php" method="POST"> 
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />             
            Send this file: <input name="upfile" type="file" />
            <input type="submit" value="Send File" />
        </form>
        
    </body>
</html>