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
        <script type="text/javascript" src="js/jQuery3.1.0.js"></script>
        <script type="text/javascript" src="js/jslogin.js.js"/></script>
    </head>
    <body>
        <form action="controller/pck_login/constrlogin.php" method="POST">
            <div id="divlable"><label>User Name:</label></div>
        <input type="text" name="txtboxusername" id="txtboxusername" value="" placeholder="กรอก username" size="30"/>
        <div id="divlable"><label>password:</label></div>
        <input type="password" name="txtboxpwd" id="txtboxpwd" value="" placeholder="กรอกรหัสผ่าน" size="30"/>
        <div id="divlogin">
            <input type="submit" name="btnlogin" id="btnlogin" value="Log In"/>
            <input type="button" name="btnCancel" id="btnCancel" value="Cancel"/>
        </div>
        </form>
        
    </body>
</html>
