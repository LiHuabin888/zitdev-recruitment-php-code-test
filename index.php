<?php

use App\Service\ProductHandler;

require __DIR__ . "/vendor/autoload.php";

spl_autoload_register(function ($class) {
    $str = str_replace('App\\', '', $class);
    $classPath = __DIR__ . DIRECTORY_SEPARATOR . $str . '.php';
    $classPath = str_replace('\\', '/', $classPath);
    require "$classPath";
});

$obj = new ProductHandler();
$result = $obj->getTotalPrice();
var_dump($result);