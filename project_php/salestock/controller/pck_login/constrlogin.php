<?php

include_once '../../bean/pck_user/usermng.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST)) {

    //Check if admin goto frmpage/frmuser/frmusermng.php
    //if other goto frmpage/frmsupplier/frmsuppliermng.php
    $objuserlogin = new Usermng();
    $objuserlogin->set_username(strtolower($_POST['txtboxusername']));
    $objuserlogin->set_password($_POST['txtboxpwd']);
    //Query data
//    echo "data user is ". $objuserlogin->get_username() . "<br/>";
//    echo "data password is ". $objuserlogin->get_password() . "<br/>";
    if ($objuserlogin->qlogin()) {
        /* Create Session */
        //$_SESSION['userName'] = strtolower($_POST['txtboxusername']);
        echo "have data <br/>";
        echo "data firstname is " . $objuserlogin->get_fname() . "<br/>";
        echo "data permissionid is " . $objuserlogin->get_permisid() . "<br/>";

        if ($objuserlogin->get_permisid() == "1") {
            // Jump to secured page
            echo "<script type='text/javascript'>alert('Welcome to SaleStock Application.')</script>";
            //$redirectpage = "../../frmpage/frmuser/frmusermng.php";
            //header("Location: " . $redirectpage);
        } else if ($objuserlogin->get_permisid() == "2") {
            // Jump to secured page
            $redirectpage = "../../frmpage/frmsupplier/frmsuppliermng.php";
            header("Location: " . $redirectpage);
        } else {
            // Jump to secured page
            //$redirectpage = "../../frmpage/frmuser/frmusermng.php";
            //header("Location: " . $redirectpage);
            echo "go to other page";
        }
    } else {
        echo "don't have data";
    }
}// end of isset
?> 

