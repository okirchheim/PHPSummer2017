<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> bwahahahahahahahahah </title>
    </head>
    <body>
        <?php
        
        require_once './models/dbconnect.php';
        require_once './models/util.php';
        include '.templates/add-address.html.php';
        
        $fullname = filter_input(INPUT_POST, $fullname)
        $email = filter_input(INPUT_POST, $email)
        $addressline1 = filter_input(INPUT_POST, $addressline1)
        $city = filter_input(INPUT_POST, $city)
        $state = filter_input(INPUT_POST, $state)
        $zip = filter_input(INPUT_POST, $zip)
        $birthday = filter_input(INPUT_POST, $birthday)
        
        
        $errors = [];
        $states = getStates();
        
        
        
        if (empty($fullname))
        {
            $errors[] = 'Full Name is Required';
        }
        if (filter_input($email)
        {
            $errors[]= 'Address is Required';
        }
        if (filter_var($addressline1))
        {
            $errors[]= 'Address is Required';
        }
        if (empty($fullname))
        {
            $errors[] = 'Full Name is Required';
        }
        if (empty($state))
        {
            $errors[] = 'State is Required';
        }
      
        if  (count ($errors === 0))
        {
            if (createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday))
                    $message = 'Address Added';
        }
        ?>
    </body>
</html>
