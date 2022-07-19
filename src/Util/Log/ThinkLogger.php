<?php
namespace App\Util\Log;

use think\LogManager;

class ThinkLogger implements AppLoggerInterface
{
    //这里为了方便就不封装起来了，正常是要封装在配置文件目录
    private $config = [
        'default'	=>	'file',
        'channels'	=>	[
            'file'	=>	[
                'type'	=>	'file',
                'path'	=>	'./logs/',
            ],
        ],
    ];
    private $logObj;

    public function __construct()
    {
        $this->logObj = new LogManager();
        $this->logObj->init($this->config);
    }

    public function info($message = '')
    {
        // TODO: Implement info() method.
        $this->logObj->info($this->formatMessage($message));
    }

    public function debug($message = '')
    {
        // TODO: Implement debug() method.
        $this->logObj->debug($this->formatMessage($message));
    }

    public function error($message = '')
    {
        // TODO: Implement error() method.
        $this->logObj->error($this->formatMessage($message));
    }

    private function formatMessage($message)
    {
        $msg = '';
        $msg .= PHP_EOL . strtoupper($message) . PHP_EOL;
        return $msg;
    }
}