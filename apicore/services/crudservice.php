<?php
require_once __DIR__."\interfaces\iservice.php";
require_once __DIR__."appconnection.php";

class CrudService implements ISqlService
{
    private $jsonencode;
    private $conn;

    public function __construct()
    {
        $this->conn = new  ConnectionDB;
    }

    public function Get($sql)
    {
        $statement=$this->conn->SQLConnect()->prepare($sql);
        $statement->execute();
        return $statement
    }


    public function GetSpecific($sql,$input)
    {
        $statement = $this->conn->SQLConnect()->prepare($sql);
        $statement->execute($input);
        return $statement;
    }

    public function Create($sql,$input)
    {
        $statement = $this->conn->SQLConnect()->prepare($sql);
        $statement->execute($input);
        return $statement;       
    }

    public function Update($sql,$input)
    {
         $statement = $this->conn->SQLConnect()->prepare($sql);
         $statement->execute(array($input));         
         return $statement;
    }

    public function Delete($sql,$input)
    {
        $statement = $this->conn->SQLConnect()->prepare($sql);
        $statement->execute(array($input));
        return $statement;
    }
}