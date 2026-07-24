<?php

declare(strict_types=1);

return [
    'name' => $_ENV['APP_NAME'] ?? 'EventOS',
    'env' => $_ENV['APP_ENV'] ?? 'production',
    'debug' => filter_var($_ENV['APP_DEBUG'] ?? false, FILTER_VALIDATE_BOOL),
    'url' => $_ENV['APP_URL'] ?? 'http://localhost:8080',
    'timezone' => $_ENV['APP_TIMEZONE'] ?? 'America/Sao_Paulo',
    'locale' => $_ENV['APP_LOCALE'] ?? 'pt_BR',
];
