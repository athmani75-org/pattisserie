<?php
include_once 'config.php';

class connection
{
    public static $instance;
    public $conne;

    function __construct($host, $dbname, $username, $password)
    {
        try {
            $this->conne = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->conne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new connection(HOST, DBNAME, USERNAME, PASSWORD);
        }
        return self::$instance;
    }
    public function getConnection()
    {
        return $this->conne;
    }   
}

