<?php

namespace vendor\core;
use R;

class Db {

    protected $pdo;
    protected static $instance;
    public static $countsql = 0;
    public static $queries = [];

    protected function __construct()
    {
        $db = require ROOT . '/config/config_db.php';
        require LIBS . '/rb.php';
        $db = require '../config/config_db.php';
        R::setup($db['dns'], $db['user'], $db['pass']);
        R::freeze(true);
//        R::fancyDebug(TRUE);
//        $options = [
//            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
//            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
//        ];
//        $this->pdo = new \PDO($db['dns'], $db['user'], $db['pass'], $options);

    }

    public static function instance() {
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

//    public function execute($sql, $params = []){
//        self::$countsql++;
//        self::$queries[] = $sql;
//        $stmt = $this->pdo->prepare($sql);
//        return $stmt->execute($params);
//    }
//
//    public function query($sql, $params = []){
//        self::$countsql++;
//        self::$queries[] = $sql;
//        $stmt = $this->pdo->prepare($sql);
//        $res = $stmt->execute($params);
//        if ($res !== false){
//            return $stmt->fetchAll();
//        }
//        return  [];
//    }

}
