<?php

class QueryBuy
{
    public function QueryGetAllTask()
    {
        $sql="SELECT * FROM tbbuysells where buysell = 'BUY'";
        return $sql;
    }

    public function QueryGetSpecificTask()
    {

    }

    public function QueryCreateTask()
    {
        
    }

    public function QueryUpdateTask()
    {

    }

    public function QueryDeleteTask()
    {

    }

}