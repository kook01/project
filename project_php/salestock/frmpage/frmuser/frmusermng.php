<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>การจัดการผู้ใช้งาน</title>
    </head>
    <body>
        <div id="div_left">
            <div id="divlable"><label>ชื่อผู้ใช้</label></div>
            <input type="text" name="txtboxusername" id="txtboxusername" value="" width="50"/>
            <div id="divlable"><label>รหัสผ่าน</label></div>
            <input type="password" name="txtboxpwd" id="txtboxpwd" value="" width="50"/>
            <div id="divlable"><label>ชื่อ-นามสกุล</label></div>
            <input type="text" name="txtboxfullname" id="txtboxfullname" value="" width="100" size="30"/>
            <div id="divlable"><label>สิทธิ์ผู้ใช้งาน</label></div>
            <select name="ddlpermission" id="ddlpermission" >
                <option value="0">---เลือก---</option>
                <option></option>
            </select>
            <div id="divbutton">
                <input type="submit" value="บันทึก" name="btnsave" id="btnsave"/>
                <input type="button" value="ยกเลิก" name="btncancel" id="btncancel"
            </div>
        </div>
        <div id="div_right>">
            <!-- Show data -->

        </div>
    </body>
</html>
