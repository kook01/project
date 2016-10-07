/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    //Clear data
    $("#btnClear").click(function () {
        $('#txtboxsuppliername').val('');
        $('#txtboxmultisupplieraddr').val('');
        $('#txtmultisuppliertel').val('');
        $('#txtboxsuppliercontact').val('');
        $('#txtboxremark').val('');
        $('#txtboxsupplierid_hidden').val('');
    });

    $("#btnSave").click(function () {
        //var txtsuppname = $('input:text[name=txtboxsuppliername]').val();
        var txtsuppname = $('#txtboxsuppliername').val();
        var txtsuppaddr = $('#txtboxmultisupplieraddr').val();
        var txtsupptel = $('#txtmultisuppliertel').val();
        var txtsuppcontract = $('#txtboxsuppliercontact').val();
        var txtsuppremark = $('#txtboxremark').val();
        var txtsuppid = $('#txtboxsupplierid_hidden').val();
        var txtidhidden = $('#txtboxsupplierid_hidden').val();
        if (txtidhidden === null) {
            txtidhidden = "kook";
        } else if (txtidhidden === "undefined") {
            txtidhidden = "kai";
        } else if (txtidhidden === '') {
            txtidhidden = "kookkai";
        }
        var datas = "txtsuppname:"+ txtsuppname + ",txtsuppaddr:" +txtsuppaddr;
        datas += ",txtsupptel:" + txtsupptel +",txtsuppcontract:"+ txtsuppcontract;
        datas += ",txtsuppremark:"+ txtsuppremark + ",txtsuppid:"+ txtidhidden;
       // alert("data all is " + datas);
        $.ajax({
            type: "POST",
            url: "../../controller/pck_supplier/contrsupplier.php",
            data: datas,
            async: true,
            sucess: function (Data_responses) {
                if (Data_responses.status === 'success') {
                    alert("Correct");
                } else {
                    alert("Error");
                }
            }
        });



    }); //End btnSave



}); // End of JQuery

