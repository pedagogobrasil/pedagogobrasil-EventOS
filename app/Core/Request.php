<?php

declare(strict_types=1);

namespace EventOS\Core;

final class Request
{
    public function __construct(
        private readonly string $method,
        private readonly string $uri,
    ) {
    }

    public static function capture(): self
    {
        $method = strtoupper((string) ($_SERVER['REQUEST_METHOD'] ?? 'GET'));
        $uri = (string) parse_url((string) ($_SERVER['REQUEST_URI'] ?? '/'), PHP_URL_PATH);

        return new self($method, $uri === '' ? '/' : $uri);
    }

    public function method(): string
    {
        return $this->method;
    }

    public function uri(): string
    {
        return $this->uri;
    }
}
