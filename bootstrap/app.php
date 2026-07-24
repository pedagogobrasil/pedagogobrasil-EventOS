<?php

declare(strict_types=1);

use EventOS\Core\Application;
use EventOS\Core\Config;
use EventOS\Core\Router;

$rootPath = dirname(__DIR__);

if (is_file($rootPath . '/vendor/autoload.php')) {
    require $rootPath . '/vendor/autoload.php';
}

$config = new Config([
    'app' => require $rootPath . '/config/app.php',
    'database' => require $rootPath . '/config/database.php',
]);

$router = new Router();

require $rootPath . '/routes/web.php';

return new Application($config, $router);
