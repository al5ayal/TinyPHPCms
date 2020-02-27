<?php
/* 
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */
//using the namespace from composer loaded
class database{
    //Setting up the database
    public function __construct() {
        $this->connect();
    }
    public $connect;
    private $username = 'rootman';
    private $password = '9et2hf6';
    private $dsn = 'mysql:host=localhost;dbname=mubasherkfs2018;charset=utf8';
    private $options = [
    //PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,];
    public function connect(){
        try{
            //echo 'Connection to db successed <br>';
            $this->connect =  new PDO($this->dsn, $this->username, $this->password, $this->options);
        }catch(PDOException $e){
            throw new PDOException($e->getMessage(), (int)$e->getCode());
		echo "Error Connecting to database {$e->getMessage()}";
        }
    }
}
