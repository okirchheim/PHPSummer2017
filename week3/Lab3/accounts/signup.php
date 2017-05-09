<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include './autoload.php';
        
        $util = new Util();
        $accounts = new Accounts();
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        if ($util->isPostRequest())
         {
            if ($accounts->signup($email, $password)){
                echo "signup worked";
            }
            else 
                echo "did not work";
            $util->redirect('login.php', array("email"=>$email));
         }
        
        include './views/signup.html.php';
        
        ?>
    </body>
</html>
