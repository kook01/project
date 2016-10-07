<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header('Content-Type: application/json; charset=utf-8');
if (isset($_POST['txtsend'])) {
   
    $tmp_send_data = $_POST['txtsend'];
    $tmp_rec_data = $tmp_send_data . ":data1";
    $tmp_rec_data2 = $tmp_send_data. ":data2";
    //echo json_encode($tmp_rec_data);
    $response["data"]["returndat"] = $tmp_rec_data;
    $response["data"]["returndat2"] = $tmp_rec_data2;
    echo json_encode($response);
}
?> 
