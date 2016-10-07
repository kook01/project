<?php
require_once '../../bean/pck_db/classconndb_invent.php';
require '../../bean/pck_util/utils.php';
//include_once '../../bean/pck_db/classconndb_invent.php';
//include_once '../../bean/pck_util/utils.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of suppliers
 *
 * @author Somphop
 */
class suppliers {

//put your code here

    private $_supplierid;
    private $_suppliername;
    private $_supplieraddr;
    private $_suppliertel;
    private $_suppliercontact;
    private $_dtcreate;
    private $_dtedit;
    private $_remark;

    public function __construct() {

    }

    function set_supplierid($paramsupplierid) {
        $this->_supplierid = $paramsupplierid;
    }

    function get_supplierid() {
        return $this->_supplierid;
    }

    function set_suppliername($paramsuppliername) {
        $this->_suppliername = $paramsuppliername;
    }

    function get_suppliername() {
        return $this->_suppliername;
    }

    function set_supplieraddr($paramsupplieraddr) {
        $this->_supplieraddr = $paramsupplieraddr;
    }

    function get_supplieraddr() {
        return $this->_supplieraddr;
    }

    function set_suppliertel($paramsuppliertel) {
        $this->_suppliertel = $paramsuppliertel;
    }

    function get_suppliertel() {
        return $this->_suppliertel;
    }

    function set_suppliercontact($paramsuppliercontact) {
        $this->_suppliercontact = $paramsuppliercontact;
    }

    function get_suppliercontact() {
        return $this->_suppliercontact;
    }

    function set_supplierdtcreate($paramsupplierdtcreate) {
        $this->_dtcreate = $paramsupplierdtcreate;
    }

    function get_supplierdtcreate() {
        return $this->_dtcreate;
    }

    function set_supplierdtedit($paramsupplierdtedit) {
        $this->_dtedit = $paramsupplierdtedit;
    }

    function get_supplierdtedit() {
        return $this->_dtedit;
    }

    function set_supplierremark($paramsupplierremark) {
        $this->_remark = $paramsupplierremark;
    }

    function get_supplierremark() {
        return $this->_remark;
    }

    /* Method */

// QdataAll
    public function QdataAll() {
        $sql = "select * from tb_supplier";
    }

//QdataId
//public function QdataId($paramsupplierid){
    public function QdataId() {
        $sql = "select suppliername from tb_supplier where supplierid = 1";
        $objcondb = new classconndb_invent();
        if ($objcondb->connectdbs()) {
            
        }
        mysqli_free_result($result);
        $objcondb->closedbs();

    }

//Insert
    public function ins() {
        $objutil = new utils();
        $objcondb = new classconndb_invent();

        $objutil->DtNow();
        $this->set_supplierdtcreate($objutil->get_dtnow());
        $this->set_supplierdtedit("");

        $sql = "insert into tb_supplier(suppliername,supplieraddr,suppliertel,suppliercontact,dtcreate,dtedit,remark)";
        $sql .= " value(?,?,?,?,?,?,?)";
        if ($objcondb->connectdbs()) {
            $stmt = mysqli_prepare($objcondb->con, $sql);
            mysqli_stmt_bind_param($stmt, "sssssss", ($this->get_suppliername()), ($this->get_supplieraddr()), ($this->get_suppliertel()), ($this->get_suppliercontact()), ($this->get_supplierdtcreate()), ($this->get_supplierdtedit()), ($this->get_supplierremark()));
            if ($stmt->execute()) {
                $returndat = "insert completed";
            } else {
                $returndat = "insert not completed";
            }
            mysqli_stmt_close($stmt);
        }
        $objcondb->closedbs();
        return $returndat;
    }

//Update
    public function ups() {
        $objutil = new utils();
        $objutil->DtNow();
        $this->set_supplierdtedit($objutil->get_dtnow());
        $this->set_supplierid(1);
        $sql = "update tb_supplier set suppliername=?,supplieraddr=?,suppliertel=?,suppliercontact=?,dtedit=?,remark=?";
        $sql .= " where supplierid=?";
        $objcondb = new classconndb_invent();
        if ($objcondb->connectdbs()) {
            $smt = mysqli_prepare($objcondb->con, $sql);
            mysqli_stmt_bind_param($smt, "ssssssi", $this->get_suppliername(), $this->get_supplieraddr(), $this->get_suppliertel(),
            $this->get_suppliercontact(), $this->get_supplierdtedit(), $this->get_supplierremark(), $this->get_supplierid());
            if ($smt->execute()) {
                $returndat = "update completed.";
            } else {
                $returndat = "update not completed.";
            }
            mysqli_stmt_close($smt);
        }
        $objcondb->closedbs();
        return $returndat;
    }

//Delete
}

//End of this class
    
