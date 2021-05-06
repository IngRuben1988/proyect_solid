<?php

class JSONCode 
{
    public function JsonResonses($sql)
    {
        header('HTTP/1.1 200 OK');
        $result['data']= $sql->fetchAll(PDO::FETCH_NAMED);
        return json_encode($result);
    }

    public function HeaderResponses()
    {
        header('HTTP/1.1 200 OK');
    }
}