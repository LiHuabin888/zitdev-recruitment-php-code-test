<?php

declare(strict_types=1);
/**
 *
 * Author：lhb
 * Date：2022/7/18
 */


namespace App\Util\Log;


class Logger implements AppLoggerInterface
{
    private $logObj;

    public function __construct()
    {
        $this->logObj = \Logger::getLogger("Log");
    }

    public function info($message = '')
    {
        // TODO: Implement info() method.
        $this->logObj->info($message);
    }

    public function debug($message = '')
    {
        // TODO: Implement debug() method.
        $this->logObj->debug($message);
    }

    public function error($message = '')
    {
        // TODO: Implement error() method.
        $this->logObj->debug($message);
    }
}