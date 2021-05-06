<?php

class QueryAccount
{
    public function QueryGetAllAccount()
    {
        $sql=" ";
        return $sql;
    }

    public function QueryGetSpecificAccount()
    {
        $sql="SELECT ac.id,CONCAT(ac.users,' ',ac.lastname) as cuenta, ac.cash FROM tbaccounts AS ac WHERE ac.id= ?";
        return $sql;
    }

    public function QueryCreateAccount()
    {
        $sql="";
        return $sql;
    }

    public function QueryUpdateAccount()
    {
        $sql="";
        return $sql;
    }

    public function QueryDeleteAccount()
    {
        $sql= "";
        return $sql;
    }
}