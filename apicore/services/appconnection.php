<?php
require_once __DIR__."\interfaces\iconnection.php";

class ConnectionDB implements SQLmethods
{
    private $hostDB="localhost";
    private $dataDB="gbm_test";
    private $userDB="root";
    private $passDB="adminroot";
    private $portDB="3306";

    public function SQLConnect()
    {
        try
        { 
            $pdoOptions = array(
                PDO::ATTR_EMULATE_PREPARES => FALSE, 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''
            );

            $dsn = "mysql:dbname=$this->dataDB;host=$this->hostDB;port=$this->portDB;";
            $conn = new PDO($dsn,$this->userDB ,$this->passDB,$pdoOptions);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch (PDOException $Excep)
        {
            print "¡ERROR! Fallo en la conexion: ".$Excep->getMessage()."</br>";
            die();
        }
    }
    
    public function SQLGetParams($input)
    {
        $filterParams=[];
        foreach($input as $param => $value)
        {
            $filterParams[]="$param=:$param";
        }
        return implode(",",$filterParams);
    }

    public function SQLBindValues($statement,$params)
    {
        foreach($params as $param => $value)
        {
            $statement->bindvalue(':'.$param, $value);
        }
        return $statement;
    }
}