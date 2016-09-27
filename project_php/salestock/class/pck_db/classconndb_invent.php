<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classconndb
 *
 * @author Somphop
 */
class classconndb_invent {

    //put your code here
//    private $servername = "localhost";
//    private $username = "root";
//    private $passwords = "passw0rd.";
//    private $dbname = "maincore";
    private $servername;
    private $username;
    private $passwords;
    private $dbname;
    public $con;

    public function __construct() {
        $this->Readxml();
    }

    /*     * ** Getter and Setter ** */

    function set_servername($paramservname) {
        $this->servername = $paramservname;
    }

    function get_servername() {
        return $this->servername;
    }

    function set_username($paramusername) {
        $this->username = $paramusername;
    }

    function get_username() {
        return $this->username;
    }

    function set_pwd($parampwd) {
        $this->passwords = $parampwd;
    }

    function get_pwd() {
        return $this->passwords;
    }

    function set_dbname($paramdbname) {
        $this->dbname = $paramdbname;
    }

    function get_dbname() {
        return $this->dbname;
    }

    // method declaration
    public function displayVar() {
        //echo $this->var;
    }

    public function Readxml() {
        $xml = simplexml_load_file("xml/conndb.xml") or die("Error: Cannot create object");
        // print_r($xml);
        $this->set_servername($xml->conndb2->servername);
        $this->set_username($xml->conndb2->username);
        $this->set_pwd($xml->conndb2->passwords);
        $this->set_dbname($xml->conndb2->dbname);
    }

    public function connectdbs() {
        $result = FALSE;
//        $this->Readxml();
        $this->con = mysqli_connect($this->get_servername(), $this->get_username(), $this->get_pwd(), $this->get_dbname());
        if (mysqli_connect_errno()) {
            //   echo "Database Connect Failed : " . mysqli_connect_error();
            return $result;
        } else {
            //   echo "Database Connected.";
            $result = TRUE;
            return $result;
        }
    }

    public function closedbs() {
//        $result = FALSE;
//        if (mysqli_close($this->con)) {
//            $result = TRUE;
//            return $result;
//        } else {
//            return $result;
//        }
        mysqli_close($this->con);
    }
    
    

}
