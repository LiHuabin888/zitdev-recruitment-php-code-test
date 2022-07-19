<?php

namespace App\Service;

use App\Util\Log\AppLoggerInterface;
use App\Util\Log\Logger;
use App\Util\Log\ThinkLogger;

class AppLogger implements AppLoggerInterface
{
    const TYPE_LOG4PHP = 'log4php';
    const TYPE_THINK_LOG = 'think-log';

    private $logger;

    public function __construct($type = self::TYPE_LOG4PHP)
    {
        switch ($type) {
            case self::TYPE_THINK_LOG:
                $this->logger = new ThinkLogger();
                break;
            case self::TYPE_LOG4PHP:
            default:
                $this->logger = new Logger();
        }
    }

    public function info($message = '')
    {
        $this->logger->info($message);
    }

    public function debug($message = '')
    {
        $this->logger->debug($message);
    }

    public function error($message = '')
    {
        $this->logger->error($message);
    }
}