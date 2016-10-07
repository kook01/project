<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of utils
 *
 * @author Somphop
 */
class utils {

    //put your code here
    private $_years;
    private $_months;
    private $_days;
    private $_hours;
    private $_minutes;
    private $_seconds;
    private $_dtnow;

    public function set_dtnow($paramdtnow) {
        $this->_dtnow = $paramdtnow;
    }

    public function get_dtnow() {
        return $this->_dtnow;
    }

    public function set_year($paramyear) {
        $this->_years = $paramyear;
    }

    public function get_year() {
        return $this->_years;
    }

    public function set_month($parammonth) {
        $this->_months = $parammonth;
    }

    public function get_month() {
        return $this->_months;
    }

    public function set_day($paramday) {
        $this->_days = $paramday;
    }

    public function get_day() {
        return $this->_days;
    }

    public function set_hour($paramhour) {
        $this->_hours = $paramhour;
    }

    public function get_hour() {
        return $this->_hours;
    }

    public function set_minute($paramminute) {
        $this->_minutes = $paramminute;
    }

    public function get_minute() {
        return $this->_minutes;
    }

    public function set_second($paramsecond) {
        $this->_seconds = $paramsecond;
    }

    public function get_second() {
        return $this->_seconds;
    }

    public function calcsaleprice($paramcost, $parammargin) {
        $returndat = ceil(abs($paramcost + (($paramcost * $parammargin) / (100 - $parammargin))));
        return $returndat;
    }

    public function DtNow() {
        $datetimenow = new DateTime('now', new DateTimeZone('Asia/Bangkok'));
        $dateformat = $datetimenow->format('Y-m-d H:i:s');
        $this->set_dtnow($dateformat);
    }

    public function splitDT($paramsplitdt) {
        //parameter format is yyyy-mm-dd HH:MM:SS
        $splitdt = explode(" ", $paramsplitdt);
        $splitdate = explode("-", $splitdt[0]);
        $splittime = explode(":", $splitdt[1]);
        //Split Date
        $this->set_year($splitdate[0]);
        $this->set_month($splitdate[1]);
        $this->set_day($splitdate[2]);
        //Split Time
        $this->set_hour($splittime[0]);
        $this->set_minute($splittime[1]);
        $this->set_second($splittime[2]);
    }

    function msgalert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

}

// end this class
?>
