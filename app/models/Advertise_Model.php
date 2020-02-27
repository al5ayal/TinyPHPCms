<?php

/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of Advertise_Model
 *
 * @author cybolt
 */
class Advertise_Model extends Model{
    function get_advs($position){
        $advsto = $this->select_where('', 'gads', "position = '{$position}'");
        
            if(count((array)$advsto) > 1){
            $adv_range = count((array)$advsto) - 1;
            }else{
                $adv_range = count((array)$advsto);
            }
            return $advs = $advsto;
    }
}
/*
   //select where method
    public function select_where($select = null, $from, $where){
        $conn = $this->connection;
        if($select == null){
            $select = '*';
        }
        try{
            $stmt = $conn->prepare("SELECT {$select} FROM {$from} WHERE ${where}");
            $stmt->execute();
            return $stmt->fetchObject(); 
        } catch (Exception $ex) {
            echo $ex->getMessage().$ex->getCode();
            exit();
        }
    }
 */
