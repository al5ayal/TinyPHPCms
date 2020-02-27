<?php
/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of Model
 *
 * @author cybolt
 */
require_once 'Database.php';
class Model {
    public $connection;
    //initializing the connection depending on the database
    public function __construct(){
        $db = new database;
        $this->connection = $db->connect;
    }
    //seting the the method select
    public function select($select = null, $from){
        $conn = $this->connection;
        if($select == null){
            $select = '*';
        }
        try{
            $stmt = $conn->prepare("SELECT {$select} FROM {$from}");
            $stmt->execute();
            return $stmt->fetchAll();
            }
        catch (Exception $ex) {
            echo $ex->getMessage().$ex->getCode();
            exit();
        }
    }
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
    //checking if the item exist in the database
    public function check_exist($table, $where){
        $conn = $this->connection;
        try{
            $stmt = $conn->prepare("SELECT * FROM {$table} WHERE {$where} LIMIT 1");
            $stmt->execute();
            return $stmt->rowCount();
        } catch (Exception $ex) {
            echo $ex->getMessage().$ex->getCode();
            exit();
        }
    }
    //getting the last items for some count
    public function get_latest($table, $order, $limit){
        $conn = $this->connection;
        try{
            $stmt = $conn->prepare("SELECT * FROM {$table} ORDER BY {$order} LIMIT {$limit}");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $ex) {
            echo $ex->getMessage().$ex->getCode();
            exit();
        }
    }
}
