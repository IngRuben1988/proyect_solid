<?php
class Methods
{
    public const API_POST = 'POST';
    public const API_PUT  = 'PUT';
    public const API_GET  = 'GET';
    public const API_DELETE = 'DELETE';        
}

class ArrayCode
{
    public function ArrayResonses($sql)
    {
        header('HTTP/1.1 200 OK');
        $result['data']= $sql->fetchAll(PDO::FETCH_NAMED);
        print_r( json_encode($result));       
    }  
}