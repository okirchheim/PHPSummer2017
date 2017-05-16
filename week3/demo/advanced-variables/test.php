<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        class dog {
            public $name;
            
            public function __construct($dogname) {
                $this->name=$dogname;
            }
                     
            public function bark() {
                echo "$this->name is barking <br/>";
            }
        }       
        
        $dogname = 'yeller';
        $viewbarks = 'paws';
        $spotName = 'ASPCA';
        
        $obj = new $dogname();
        $obj->$viewBarks();
        echo $obj->$spotName;
        
        $obj->$dogname();
        
        
        ?>
    </body>
</html>
