<?php
include_once 'class/pck_db/classconndb.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usermng {

    private $fname;
    private $username;
    private $passwords;

    public function __construct() {
        $objcondb = new classconndb();
    }

    function set_password($parampassword) {
        $this->passwords = $parampassword;
    }

    function get_password() {
        return $this->passwords;
    }

    function set_username($paramusername) {
        $this->username = $paramusername;
    }

    function get_username() {
        return $this->username;
    }

    function set_fname($paramfname) {
        $this->fname = $paramfname;
    }

    function get_fname() {
        return $this->fname;
    }

    public function getnames() {
      //  $objcondb = new classconndb();
        $sql = "SELECT username,firstname FROM tb_user WHERE permissionid='1'";
        if ($objcondb->connectdbs()) {
            if ($result = mysqli_query($objcondb->con, $sql)) {
                while ($finfo = mysqli_fetch_array($result)) {
                    $this->set_username($finfo[0]);
                    //  $this->set_fname($finfo[1]);
                    $this->set_fname($finfo["firstname"]);
                }
            }
            mysqli_free_result($result);
        }
        $objcondb->closedbs();
    }

    public function qdataall(){
     //   $objcondb = new classconndb();
        $sql = "SELECT * FROM tb_user";
        if($objcondb->connectdbs()){
            if($result = mysqli_query($objcondb->con, $sql)){
                // DO this
            }
        }
    }
    
    public function getnameswparam() {
        $objcondb = new classconndb();
        $perid = 1;
        $sql = "SELECT username,password FROM tb_user WHERE permissionid=?";
        if ($objcondb->connectdbs()) {
            if ($stmt = mysqli_prepare($objcondb->con, $sql)) {
                mysqli_stmt_bind_param($stmt, "i", $perid);
                //mysqli_stmt_execute($stmt);
                $stmt->execute();
                $stmt->bind_result($uname, $pwd);
                while ($stmt->fetch()) {
                    $this->set_password($uname);
                }
                //json_encode($stmt);
            }
            mysqli_stmt_close($stmt);
        }
        $objcondb->closedbs();
    }
    
    public function ins(){
        $paramusername = "Thanita";
        $password = "password";
        $paramfname = "Thanita_name";
        $paramper = 2;
        
        $sql = "insert into tb_user(username,password,firstname,permissionid)values(?,?,?,?)";
      //  $sql .= " values(?,?,?,?)";
        $objcondb = new classconndb();
        if($objcondb->connectdbs()){
            if($stmt = mysqli_prepare($objcondb->con, $sql)){
                mysqli_stmt_bind_param($stmt, "sssi", $paramusername,$password,$paramfname,$paramper);
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

    public function ups(){
        $paramusername = "Thanita";
        $password = "password";
        $paramfname = "Thanita_name_up";
        $paramper = 2;
        
        $sql = "update tb_user set username=?,password=?,";
        $sql .= "firstname=? where permissionid=?";
        $objcondb = new classconndb();
        if($objcondb->connectdbs()){
            if($stmt = mysqli_prepare($objcondb->con, $sql)){
                mysqli_stmt_bind_param($stmt, "sssi", $paramusername,$password,$paramfname,$paramper);
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
}
?>
