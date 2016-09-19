<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'class/pck_db/classconndb.php';
include_once 'class/pck_user/user.php';
include_once './class/pck_util/utils.php';
?>
<html lang="en">
    <head>
        <title>Test bootstrap</title>
        <meta  charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h1>My First Bootstrap Page</h1>
            <p>This is some text.</p> 
        </div>
        <div class="container">
            <div class="row" >
                <div class="col-sm-12" style="align-content: center">
                    <div id ="loginlabel">
                        <label>username : </label>
                    </div>
                    <div id="divusername">
                        <input type="text" name="txtboxname" id="txtboxname" value="" size="20" />
                    </div>
                    <div id ="loginlabel">
                        <label>password : </label>
                    </div>
                    <div id="divpwd">
                        <input type="password" name="txtboxpwd" id="txtboxpwd" value="" size="20"/>
                    </div>
                    <br/>
                    <div id ="loginlabel">
                        <input type="submit" value="Login" name="btnlogin" />
                    </div>
                    <?php
                    echo "kookkai_test1" . "<br/>";
//                    $xml = simplexml_load_file("conndb.xml") or die("Error: Cannot create object");
//                    //print_r($xml);
//                    echo $xml->conndb1->servername . "<br>";



                    $calldb = new classconndb();
                    // $calldb->Readxml();
                    echo "data servername is " . $calldb->get_servername() . "<br/>";
                    echo "data username is " . $calldb->get_username() . "<br/>";
                    echo "data passwords is " . $calldb->get_pwd() . "<br/>";
                    echo "data dbname is " . $calldb->get_dbname() . "<br/>";
//                    if ($calldb->connectdbs()) {
//                        echo "connect comp";
//                    } else {
//                        echo "connect not comp";
//                    }
//                    if($calldb->closedbs()){
//                        echo "close comp";
//                    }else{
//                        echo "close not comp";
//                    }
                    $objUtils = new utils();
                    $datreturn = $objUtils->calcsaleprice(100, 30);
                    echo "<br/>" . "Sale price is " . $datreturn . "<br/>";

//                    $objuser = new Usermng();
//                    $objuser->getnames();
//                    echo "data username is " . $objuser->get_username();
//                    echo "data firstname is " . $objuser->get_fname();
//                    echo "<br/>";
//                    $objuser->getnameswparam();
//                    echo "data password is " . $objuser->get_password();
//                    echo "<br/>";
//                    $abc = $objuser->ins();
//                    echo "process is " . $abc;
//                    echo "<br/>";
//                    $abc = $objuser->ups();
//                    echo "process is " . $abc;
                    ?>				
                </div>
                <!--                <div class="col-sm-8">.col-sm-8</div>-->
            </div>
        </div>

    </body>
</html>
