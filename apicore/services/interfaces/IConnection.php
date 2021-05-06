<?php
interface SQLmethods
{
    public function SQLConnect();
    public function SQLGetParams($input);
    public function SQLBindValues($statement,$params);
}