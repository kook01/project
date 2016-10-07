<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once './bean/pck_util/utils.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Test Array
//        $abc = array("Volvo", "BMW", "Toyota");
//        $arrlength = count($abc);
//        sort($abc);
//        //echo "data length is " . $arrlength . "<br/>";
//        for ($a = 0;$a<$arrlength;$a++){
//            echo "data[" . $a . "] is ". $abc[$a] . "<br/>";
//        }
//        echo "<br/>";
        /* Test DateTime */
//        $objUtils = new utils();
//        $objUtils->DtNow();
//        $objUtils->splitDT($objUtils->get_dtnow());
//        echo "data dt_now is ". $objUtils->get_dtnow() . "<br/>";
//        echo "data year is ". $objUtils->get_year() . "<br/>";
//        echo "data month is ". $objUtils->get_month() . "<br/>";
//        echo "data day is ". $objUtils->get_day() . "<br/>";
//        echo "data hour is ". $objUtils->get_hour() . "<br/>";
//        echo "data minute is ". $objUtils->get_minute() . "<br/>";
//        echo "data second is ". $objUtils->get_second() . "<br/>";

        /* Test dropdownlist */
        
        ?>
        <select name= "ddlsupplier" id = "ddlsupplier">
        <option value="1">abc</option>
        <option value="2">22</option>
        <option value="3">33</option>
        </select>
    </body>
</html>
