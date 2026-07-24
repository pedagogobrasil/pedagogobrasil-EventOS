<?php

declare(strict_types=1);

namespace EventOS\Core;

use Closure;

final class Router
{
    /**
     * @var array<string, array<string, Closure>>
     */
    private array $routes = [];

    public function get(string $path, Closure $handler): void
    {
        $this->add('GET', $path, $handler);
    }

    public function add(string $method, string $path, Closure $handler): void
    {
        $this->routes[strtoupper($method)][$path] = $handler;
    }

    public function dispatch(Request $request): Response
    {
        $handler = $this->routes[$request->method()][$request->uri()] ?? null;

        if ($handler === null) {
            return new Response(
                '<h1>404</h1><p>The requested page was not found.</p>',
                404,
            );
        }

        return $handler($request);
    }
}
