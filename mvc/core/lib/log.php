<?php
namespace core\lib;
use core\lib\mon;
class log
    {
    static $class;
        /*
         * 1 确认日志储存方式
         *
         * 2 写日志
         */
    static public function init(){
        //确认储存方式
        $drive = mon::get('DRIVE','log');
//       v($drive);exit;
        $class = '\core\lib\drive\log\\'.$drive;
 //       v($class);exit();
        self::$class = new $class;
    }
    static public function log($name,$file = 'log')
    {
        self::$class->log($name,$file);
    }
    }