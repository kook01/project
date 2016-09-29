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
        // put your code here
        $abc = array("Volvo", "BMW", "Toyota");
        $arrlength = count($abc);
        sort($abc);
        //echo "data length is " . $arrlength . "<br/>";
        for ($a = 0;$a<$arrlength;$a++){
            echo "data[" . $a . "] is ". $abc[$a] . "<br/>";
            
        }
        echo "<br/>";
//        $date3 = new DateTime('now', new DateTimeZone('Asia/Bangkok'));
//        $date4 = $date3->format('Y-m-d H:i:s');
//        echo $date4;
//        echo "<br/>";
//        echo "data split<br/>";
//        $date5 = explode(" ", $date4);
//        echo "data date is " . $date5[0] ."<br/>";
//        echo "data time is " . $date5[1] ."<br/>";
//        echo "data split date <br/>";
//        $date6 = explode("-", $date5[0]);
//        echo "data date_year is " . $date6[0] ."<br/>";
//        echo "data date_month is " . $date6[1] ."<br/>";
//        echo "data date_day is " . $date6[2] ."<br/>";
//        echo "data split time <br/>";
//        $date7 = explode(":", $date5[1]);
//        echo "data date_hour is " . $date7[0] ."<br/>";
//        echo "data date_minute is " . $date7[1] ."<br/>";
//        echo "data date_second is " . $date7[2] ."<br/>";
        
        $objUtils = new utils();
        $objUtils->DtNow();
        $objUtils->splitDT($objUtils->get_dtnow());
        echo "data dt_now is ". $objUtils->get_dtnow() . "<br/>";
        echo "data year is ". $objUtils->get_year() . "<br/>";
        echo "data month is ". $objUtils->get_month() . "<br/>";
        echo "data day is ". $objUtils->get_day() . "<br/>";
        echo "data hour is ". $objUtils->get_hour() . "<br/>";
        echo "data minute is ". $objUtils->get_minute() . "<br/>";
        echo "data second is ". $objUtils->get_second() . "<br/>";
        ?>
    </body>
</html>
