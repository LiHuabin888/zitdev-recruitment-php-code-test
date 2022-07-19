<?php
namespace App\Util\Log;

Interface AppLoggerInterface {
    public function info($message = '');

    public function debug($message = '');

    public function error($message = '');
}