<?php

include_once 'class/pck_db/classconndb.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of permission
 *
 * @author Somphop
 */
class permission {

    //put your code here

    private $permissionid, $permissionname;

    public function __construct() {
        ;
    }

    public function set_permissionid($paramperid) {
        $this->permissionid = $paramperid;
    }

    public function get_permissionid() {
        return $this->permissionid;
    }

    public function set_permissionname($parampername) {
        $this->permissionname = $parampername;
    }

    public function get_permissionname() {
        return $this->permissionname;
    }

    //Method
    //QueryId
    public function qid($paramid) {
        
        $sql = "select permissionname from tb_permission where permissionid=?";
        $objconndb = new classconndb();
        try {
            if ($objconndb->connectdbs()) {
                $stmt = mysqli_prepare($objconndb->con, $sql);
                mysqli_stmt_bind_param($stmt, "i", $paramid);
                $stmt->execute();
                $stmt->bind_result($pername);
                while($stmt->fetch()) {
                    $this->set_permissionname($pername);
                }
                $arr = array('permission_name'=>$this->get_permissionname());
                json_encode($arr);
            }
        } catch (Exception $ex) {
            
        } finally {
            mysqli_stmt_close($stmt);
            $objconndb->connectdbs();
        }
    }

    //QueryAll
    public function qall(){
        $sql = "select * from tb_permission";
        
    }
    //Insert
    public function ins(){
        $sql = "insert into tb_permission(permissionname)values(?)";
        $objcondb = new classconndb();
        if($objcondb->connectdbs()){
            if($stmt = mysqli_prepare($objcondb->con, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $parampermissionname);
                if($stmt->execute()){
                    $returndat = "insert completed";
                }else{
                    $returndat = "insert not completed";
                }
            }
            mysqli_stmt_close($stmt);
        }
        $objcondb->closedbs();
        return $returndat;
    }
    //Update
    public function ups(){
        $sql = "update tb_permission set permissionname=? where permissionid=?";
        $objcondb = new classconndb();
        if($objcondb->connectdbs()){
            if($stmt = mysqli_prepare($objcondb->con, $sql)){
                mysqli_stmt_bind_param($stmt, "si", $parampermissionname,$parampermissionid);
                if($stmt->execute()){
                    $returndat = "update completed";
                }else{
                    $returndat = "update not completed";
                }
            }
            mysqli_stmt_close($stmt);
        }
        $objcondb->closedbs();
        return $returndat;
    }
    //Del
}
