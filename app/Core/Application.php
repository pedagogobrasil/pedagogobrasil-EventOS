<?php

declare(strict_types=1);

namespace EventOS\Core;

final class Application
{
    public function __construct(
        private readonly Config $config,
        private readonly Router $router,
    ) {
    }

    public function run(Request $request): Response
    {
        return $this->router->dispatch($request);
    }

    public function config(): Config
    {
        return $this->config;
    }
}
