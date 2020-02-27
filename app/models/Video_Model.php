<?php

/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of Video_Model
 *
 * @author cybolt
 */
class Video_Model extends Model {

    //getting the latest articles on where condition
    public function select_limit($limit){
        return $this->select('', "vedio ORDER BY id DESC LIMIT {$limit}");
    }
    
}
