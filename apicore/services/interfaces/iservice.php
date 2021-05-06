<?php
interface ISqlService
{
    public function Get($sql);
    public function GetSpecific($sql,$input); 
    public function Update($sql,$statement,$params);
    public function Delete($sql,$input);   
}

