<?php
/*
require_once __DIR__."\interfaceProduct.php";
require_once __DIR__."\queryproduct.php";
require_once __DIR__."/../services/crudservice.php";
*/
class Proyect
{
    private $crud;
    private $query;
    private $proId;
    private $proName;
    private $proDescription;
    private $proCreate;
    private $proUpdate;
    private $proTerminate;
    private $proDelete;
    private $proLimited;


    public function __construct()
    {

    }


    public function UpdateProyect()
    {
        $inputUpdate = array($this->product,$this->description,$this->cost,$this->stock);
        $this->crud->Update($this->query->QueryUpdateProduct(),$inputUpdate,"");
    }
}