<?php
namespace core\lib\drive\log;
use core\lib\mon;
class file
    {
    public $path;//日志储存位置
    public function __construct(){
        $this->path = mon::get('OPTION','log');
    }
        public function log($message,$file='log')
        {
            //var_dump( $this->path['PATH']);
            //1确定文件储存位置是否存在
            //新建目录
            //2写入日志
          if(!is_dir($this->path['PATH'].date('YmdH'))){
              mkdir($this->path['PATH'].date('YmdH'),'0777',true);
              //新建并设置文件权限 如果成功就写入
          }
           return file_put_contents($this->path['PATH'].date('YmdH').'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
         }
    }
//文件系统