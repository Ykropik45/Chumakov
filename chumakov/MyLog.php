<?php

namespace chumakov;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface
{
    public static function log($str)
    {
        MyLog::Instance()->log[] =$str;
    }
    public static function write()
    {
        MyLog::Instance()->_write();
    }
    public function _write()
    {
        foreach ($this->log as $v)
        {
            echo $v . "\n\r";
        }
    }
}
