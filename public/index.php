<?php

declare(strict_types=1);

use EventOS\Core\Request;

require_once dirname(__DIR__) . '/app/Core/Application.php';
require_once dirname(__DIR__) . '/app/Core/Config.php';
require_once dirname(__DIR__) . '/app/Core/Request.php';
require_once dirname(__DIR__) . '/app/Core/Response.php';
require_once dirname(__DIR__) . '/app/Core/Router.php';

header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');

$application = require dirname(__DIR__) . '/bootstrap/app.php';
$application->run(Request::capture())->send();
