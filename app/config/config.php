<?php
/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */
/**
 * Description of config
 *
 * @author cybolt
 */
class config {
    //grap setting data using the model
    protected $conn;
    function __construct() {
        $base_connection = new database();
        $this->conn = $base_connection->connect;
    }
    //using on method to get all generals
    public function mainstaff($table){
        $dbconn = $this->conn;
        $stmt = $dbconn->prepare("SELECT * FROM $table");
        try{
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $ex) {
            return $ex->getMessage()." ". $ex->getCode();
        }
    }
    
    //Grapping the main cats for the whole script generally
    public function maincats(){
        $dbconn = $this->conn;
    }
    
}
