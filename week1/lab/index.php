<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./templates/bootstrap.css">
         <link rel="stylesheet" href="./templates/style.css">
        <!-- Optional theme -->  
    </head>
    <body>
        <?php        
        include './models/dbconnect.php';
        include './models/addressCRUD.php';
        
        $addresses = readAllAddress();
        include './templates/view-address.html.php';        
        ?>
    </body>
</html>
