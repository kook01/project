<?php

include_once '../../bean/pck_supplier/suppliers.php';
include_once '../../bean/pck_util/utils.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$objsuppliers = new suppliers();
if (isset($_POST)) {
    $objsuppliers->set_suppliername($_POST['txtboxsuppliername']);
    $objsuppliers->set_supplieraddr($_POST['txtboxmultisupplieraddr']);
    $objsuppliers->set_suppliertel($_POST['txtmultisuppliertel']);
    $objsuppliers->set_suppliercontact($_POST['txtboxsuppliercontact']);
    $objsuppliers->set_supplierremark($_POST['txtboxremark']);
    $tmp_supplierid = $_POST['txtboxsupplierid_hidden'];
    if (($tmp_supplierid == null) || ($tmp_supplierid == "")) {
        //Insert
        $datareturn = $objsuppliers->ins();
    } else {
        //Update
        $objsuppliers->set_supplierid($tmp_supplierid);
        $datareturn = $objsuppliers->ups();
    }
    //echo " data return is " . $datareturn;
    echo json_encode($datareturn);
} else {
//Error and and return page   
    $datareturn = "Process can not success,please type again.";
    echo json_encode($datareturn);
}
?>
