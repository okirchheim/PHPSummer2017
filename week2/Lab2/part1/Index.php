<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Message</title>
    </head>
    <body>
        <?php
        // put your code here
        require_once './autoload.php';
        
        $test = new ErrorMessage();
        
        $test->addMessage("TEST1", 'JHGJK');    
        $test->addMessage("TEST2", 'JHGJK');    
        $test->addMessage("TEST3", 'JHGJK'); 
        
        
        $test->removeMessage("TEST2");
        
        var_dump('<br />',$test->getAllMessages());
        
        $test2 = new Message("test2");
        $test->addMessage("TEST1", 'JHGJK');    
        $test->addMessage("TEST2", 'JHGJK');    
        $test->addMessage("TEST3", 'JHGJK'); 
        
        
        $test->removeMessage("TEST3");
        var_dump('<br />',$test->getAllMessages());
               
        ?>
    </body>
</html>
