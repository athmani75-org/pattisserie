<?php
/**
 * principale model to handle the main operations of the application
 */
class Principale extends Model{
    
    public $table;

    function __construct($table)
    {
        parent::__construct();
        $this->table = $table;
    }
    /**
     * AddData function to add data to the database
     */
    public function AddData($data)
    {
        return $this->insertData($this->table, $data);
    }
}