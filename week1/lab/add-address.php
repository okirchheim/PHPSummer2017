<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> bwahahahahahahahahah </title>
         <link rel="stylesheet" href="./templates/bootstrap.css">
         <link rel="stylesheet" href="./templates/style.css">
    </head>
    <body>
        <?php
        
        require_once './models/dbconnect.php';
        require_once './models/util.php';
        require_once './models/addressCRUD.php';
        
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');
        $errors = [];
        $states = getStates();          
        
        if (empty($fullname))
        {
            $errors[] = 'Full Name is Required';
        }
        if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false )
        {
            $errors[]= 'Email is Required';
        }
        if (empty($addressline1))
        {
            $errors[]= 'Address is Required';
        }
        if (empty($city))
        {
            $errors[] = 'City is Required';
        }
        if (empty($state))
        {
            $errors[] = 'State is Required';
        }
        if (empty($zip))
        {
            $errors[] = 'Zip is Required';
        }
        if (empty($birthday))
        {
            $errors[] = 'Birthday is Required';
        }      
        if  (count($errors) == 0)
        {
            if (createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday))
            {$message = 'Address Added';}
        }
        
        include './templates/add-address.html.php';
        ?>
    </body>
</html>
