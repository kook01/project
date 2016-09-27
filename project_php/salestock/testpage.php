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
        $abc = array("Volvo", "BMW", "Toyota");
        $arrlength = count($abc);
        sort($abc);
        //echo "data length is " . $arrlength . "<br/>";
        for ($a = 0;$a<$arrlength;$a++){
            echo "data[" . $a . "] is ". $abc[$a] . "<br/>";
            
        }
        ?>
    </body>
</html>
