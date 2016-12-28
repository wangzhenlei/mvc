<?php
namespace core\lib;
use core\lib\mon;
class db extends \PDO
{
    public function __construct(){

        $database = mon::all('database');
       // v($temp);
        try{
            parent::__construct($database['DSN'],$database['USERNAME'],$database['PASSWD']);
        }catch(\PDOException $e){
            p($e->getMessage());
        }
    }
}