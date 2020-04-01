#!/usr/bin/env php

<?php

require_once 'vendor/autoload.php';

use Siler\Swoole;
use Siler\Route;
use Controllers\Category;


$mongodb    = new MongoDB\Client("mongodb://mongodb:27017");

echo get_class($mongodb->catalog);

$handler = function ($req) use ($mongodb) {

    $category = new Category($mongodb);

    Route\get('/category', [$category, 'index']);
    
    Swoole\emit('Not found', 404);
};

Swoole\http($handler)->start();