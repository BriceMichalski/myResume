<?php

namespace App\Handler;

use Monolog\Handler\SyslogUdpHandler;

class SyslogCustomUdpHandler extends SyslogUdpHandler
{
    /**
     * @see https://tools.ietf.org/html/rfc5424#section-6.2.3.1
     */
    protected function getDateTime()
    {
        return date('Y-m-d\TH:i:s.v\Z');
    }
}
