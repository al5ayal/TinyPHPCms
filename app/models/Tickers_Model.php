<?php

/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of Tickers_model
 *
 * @author cybolt
 */
class Tickers_model extends Model{
    //getting the last 15 article for the ticker
    public function headtickers(){
    return $this->get_latest('article', 'articleid DESC', '15');
    }
}
