<?php
namespace core\lib;
use core\lib\mon;
class route{
    public $ctrl;
    public $action;
    public function __construct(){
        //p($_SERVER);
        //隐藏index.php
        //获取url 参数部分
        //返回控制器和方法
//        v($_SERVER);
       // p($_SERVER['REQUEST_URI']);
        if(isset($_GET["c"])){
            $path=isset($_GET["c"])?ucfirst($_GET["c"]):"Index";
          // p($path);
            $patharr=explode('/',trim($path,'/'));
           // p($patharr);
            //p($patharr);
            if(isset($patharr[0])){
                $this->ctrl = $patharr[0];
            }
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->action = $patharr[1];
                unset($patharr[1]);
            } else{
                $this->action = mon::get('ACTION','route');
                //p(2);
            }
            $count = count($patharr)+2;
            $i=2;
            while($i<$count){
                if(isset($patharr[$i+1])) {
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i + 2;
            }
           // p($patharr);
            //p($_GET);
        }else{
            $this->ctrl= mon::get('CTRL','route');
            $this->action= mon::get('ACTION','route');
        }
    }
}