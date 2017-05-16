<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include '.model/dbconnect.php';
        include './models/addressCRUD.php';
        
        $addresses = readAllAddress();
        
        include '.templats/view-address.html.php'
        ?>
    </body>
</html>
