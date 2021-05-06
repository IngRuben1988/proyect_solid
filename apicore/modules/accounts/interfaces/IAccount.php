<?php

interface IAccountGets
{
    public function GetALLAccounts();
}

interface IAccountGetSpecifics
{
    public function GetSpecificAccount();
}

interface IAccountCreates
{
    public function CreateAccount();
}

interface IAccountUpdates
{
    public function UpdateAccount();
}

interface IAccountDeletes
{
    public function DeleteAccount();
}