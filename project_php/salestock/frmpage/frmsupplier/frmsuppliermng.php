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
        <form id="frmsupplier" action="../../controller/pck_supplier/contrsupplier.php" method="POST">
            <div id="divlable"><label>Supplier Name:</label></div>
            <input type="text" name="txtboxsuppliername" id="txtboxsuppliername" value="" size="59"/>  
            <div id="divlable"><label>Supplier Address:</label></div>
            <textarea name="txtboxmultisuppleraddr" rows="4" cols="60"></textarea>
            <div id="divlable"><label>Supplier tel:</label></div>
            <input type="text" maxlength="10" name="txtmultisuppliertel" id="txtmultisuppliertel" placeholder="Telephone"/>
            <div id="divlable"><label>Supplier Contact:</label></div>
            <input type="text" name="txtboxsuppliercontact" id="txtboxsuppliercontact" value="" size="60"/>
            <div id="divlable"><label>Remark:</label></div>
            <textarea name="txtboxremark" id="txtboxremark" rows="4" cols="60"></textarea>
            <div id="divbutton">
                <input type="submit" value="Save" name="btnSave" id="btnSave"/>  
                <input type="button" value="Clear" name="btnClear" id="btnClear"/>  
            </div>
        </form>


    </body>
</html>
