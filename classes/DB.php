<?php
include_once '../core/init.php';

class DB {
    private static $_instance = null;
    private $_pdo,$_querry,$_error=false,$_results,$_count=0;

    private function __construct(){
        try{
            $this->_pdo = new PDO(Config::get('mysql/host'), Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password', Config::get('mysql/port')));
            echo 'connected';
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    public function querry($sql, $params = array()){
        $this-> _error = false;
        if($this->_querry = $this->_pdo->prepare($sql)){
            $x = 1;
            if(count($params)) {
                foreach ($params as $param) {
                    $this->_querry->bindValue(x, $param);
                    $x++;
                }
            }
            if($this->_querry->execute()){
                echo 'success';
            }
        }
    }
}
