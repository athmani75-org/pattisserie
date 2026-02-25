<?php

class connexion{
    public static $Instance;
    public $connecte;

    public function __construct()
    {
        try {
            $this->connecte = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USERNAME, PASSWORD);
            $this->connecte->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public static function getInstance()
    {
        if (!self::$Instance) {
            self::$Instance = new connexion();
        }
        return self::$Instance;
    }
    public function getConnection()
    {
        return $this->connecte;
    }
}