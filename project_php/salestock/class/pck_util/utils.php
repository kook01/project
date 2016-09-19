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


    public function calcsaleprice($paramcost, $parammargin) {
        $returndat = ceil(abs($paramcost + (($paramcost * $parammargin) / (100 - $parammargin))));
        return $returndat;
    }

    
}
?>
