/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $("#btnsave").click(function () {
        var txtsend = $('#txtsend').val();
        var datas = "txtsend=" + txtsend;
//        $.ajax({
//            type: "POST",
//            url: "controller/pck_supplier/contrjquery.php",
//            data: datas,
//            success: function (data, textStatus, jqXHR) {
//              $('#txtreceive').val(data);
//            },
//            error: function (jqXHR, textStatus, errorThrown) {
//                
//            }
//        })
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "controller/pck_supplier/contrjquery.php",
            data: datas,
            success: function (data, textStatus, jqXHR) {
                $('#txtreceive').val(data.data["returndat"]);
                alert(data.data["returndat2"]);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('something went wrong.');
            }
        })

    }); //end jqueyr_btnsave

});// End jquery
