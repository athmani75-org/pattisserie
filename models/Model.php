<?php

class Model{
 public $db;
 /**
  * Model constructor avoir la connexion a la base de données
  */
    public function __construct()
    {
        $this->db = connexion::getInstance()->getConnection();
    }
    /** 
     * insertData function to insert data into the database
     */ 
    public function insertData($table, $data)
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $this->db->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $stmt->rowCount()>0;
    }
}