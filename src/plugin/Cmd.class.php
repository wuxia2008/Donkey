<?php

/**
 * Created by PhpStorm.
 * User: ClownFish 187231450@qq.com
 * Date: 14-12-27
 * Time: 下午3:13
 */
class  Cmd extends  PluginBase
{

    public function run($task)
    {
        echo "run\n";
//        $cmd = $task["cmd"];
//        $status = 0;
//        exec($cmd, $output, $status);
//        Main::log_write($cmd . ",已执行.status:" . $status);
//        exit($status);
        if($this->delay(2)){
            echo "ok\n";
        }else{
            sleep(10);
        }

    }
}