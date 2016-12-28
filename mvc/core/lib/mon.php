<?php
namespace core\lib;
class mon
{
    static public $conf = array();
    //配置类 get可以加载配置文件中单个的配置
    static public function get($name,$file)
    {
        /*
         * 1 判断配置文件是否存在
         * 2 判断配置是否存在
         * 3 缓存配置
        */
        if (isset(self::$conf[$file])) {
            return self::$conf[$file][$name];
        } else {
            //v(1);
        $path = MVC . '\core\config\\' . $file . '.php';
        //v($file);exit;
        if (is_file($path)) {
            $conf = include $path;
            if (isset($conf[$name])) {
                self::$conf[$path] = $conf;
                return $conf[$name];
            } else {
                throw new \Exception('没有配置项' . $name);
            }
        } else {
            throw new \Exception('找不到配置文件' . $file);
        }
    }
    }
    //all方法可以引用我们的整个配置文件
    static public function all($file)
    {
        if(isset(self::$conf[$file])){
            return self::$conf[$file];
        }else{
            $path = MVC .'/core/config/'.$file.'.php';
            if(is_file($path)){
                $conf = include $path;
                self::$conf[$file] = $conf;
                return $conf;
            }else{
                throw new \Excption('找不到配置文件'.$file);
            }
        }
    }
}