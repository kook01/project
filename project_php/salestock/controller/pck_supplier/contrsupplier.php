<?php

include_once '../../bean/pck_supplier/suppliers.php';
include_once '../../bean/pck_util/utils.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$objsuppliers = new suppliers();
//if(isset($_POST["submit"])){
//    //$formData = $_POST["frmsupplieres"]; // dont forget to sanitize any post data
//   //than you can call your class function and pass this data
////   $class = new class();
////   $class->ProcessRegistrationFunction($formData);
// }
// 
// if(isset($_POST["submit"])){
//     $frmdata = $_POST['frmsupplieres'];
//     $objsuppliers->set_suppliername($formData == 'txtboxsuppliername');
//    echo "data suppliername is : " . $objsuppliers->get_suppliername();
//    $returndat = "true";
// }else{
//    $returndat = "false";
//
// }
//      echo "data return is : " . $returndat;
    
if(isset($_POST)){    

//         $objUtils = new utils();
//         $objUtils->DtNow();
    
         $objsuppliers->set_suppliername($_POST['txtboxsuppliername']);
         $objsuppliers->set_supplieraddr($_POST['txtboxmultisuppleraddr']);
         $objsuppliers->set_suppliertel($_POST['txtmultisuppliertel']);
         $objsuppliers->set_suppliercontact($_POST['txtboxsuppliercontact']);
         $objsuppliers->set_supplierremark($_POST['txtboxremark']);
              
//        echo "data is : " . $objsuppliers->get_suppliername() . ":" .$objsuppliers->get_supplieraddr() . ":" 
//                . $objsuppliers->get_suppliertel() . ":" . $objsuppliers->get_suppliercontact() . ":" 
//                . $objsuppliers->get_supplierremark() . $objsuppliers->get_supplierdtcreate(); 
         $datareturn = $objsuppliers->ups();
         echo " data return is " . $datareturn;
                
}else{
   
}

?>
