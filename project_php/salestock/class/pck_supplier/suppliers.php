<?php

include_once 'class/pck_db/classconndb_invent.php';
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
public $objcondb = null;

public function __construct() {
//$objcondb = new classconndb_invent();
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
$sql = "select * from tb_supplier where supplierid = ?";
$objcondb = new classconndb_invent();
if ($objcondb->connectdbs()) {

}
mysqli_free_result($result);
$objcondb->closedbs();
}

//Insert
public function ins() {


$sql = "insert into tb_supplier(suppliername,supplieraddr,suppliertel,suppliercontact,dtcreate,dtedit,remark)";
$sql .= " value(?,?,?,?,?,?,?)";

$objcondb = new classconndb_invent();
if ($objcondb->connectdbs()) {
if ($stmt = mysqli_prepare($objcondb->con, $sql)) {
mysqli_stmt_bind_param($stmt, "sssssss", $this->get_suppliername(), $this->get_supplieraddr());
if ($stmt->execute()) {
$returndat = "insert completed";
}else {
$returndat = "insert not completed";
}
}
}
}
}

//Update
//Delete
}
