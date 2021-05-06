<?php

interface IProyectGets
{
    public function GetProyect();
}

interface IProyectSpecific
{    
    public function GetSpecificProyect();
    public function GetSpecificProyectName();
}

Interface IProyectCreate
{
    public function CreateProyect();
}

interface IProectUpdate
{
    public function UpdateProyect();
}

interface IProyectDeletes
{
    public function DeleteProyect(); 
}