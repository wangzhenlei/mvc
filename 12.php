<?php 
set_time_limit(0);
        $url = array(
           'http://blog.csdn.net/wzl0310/article/details/53899107',
            'http://blog.csdn.net/wzl0310/article/details/53858286',
            'http://blog.csdn.net/wzl0310/article/details/53860806',
            'http://blog.csdn.net/wzl0310/article/details/53871491',
            'http://blog.csdn.net/wzl0310/article/details/53884302',
            'http://blog.csdn.net/wzl0310/article/details/53883564',
            'http://blog.csdn.net/wzl0310/article/details/53888373'
            );
        for(;;){
            for($i=0;$i<count($url);$i++){
            file_get_contents($url[$i]);
//                 sleep(1);
            }
        }
        
        
?>