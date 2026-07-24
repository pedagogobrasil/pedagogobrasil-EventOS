<?php

declare(strict_types=1);

use EventOS\Core\Request;
use EventOS\Core\Response;
use EventOS\Core\Router;

/** @var Router $router */
$router->get('/', static function (Request $request): Response {
    unset($request);

    $content = <<<'HTML'
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EventOS</title>
    <style>
        :root {
            color-scheme: light dark;
            --bg: #f6f7f9;
            --panel: #ffffff;
            --text: #1f2937;
            --muted: #5f6b7a;
            --line: #d8dee8;
            --accent: #0f766e;
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --bg: #101418;
                --panel: #171d23;
                --text: #f2f5f8;
                --muted: #a7b0bb;
                --line: #2a333d;
                --accent: #2dd4bf;
            }
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: var(--bg);
            color: var(--text);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.5;
        }

        main {
            width: min(920px, calc(100% - 32px));
            padding: 48px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: var(--panel);
        }

        .eyebrow {
            margin: 0 0 12px;
            color: var(--accent);
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0;
            text-transform: uppercase;
        }

        h1 {
            margin: 0;
            font-size: clamp(2.5rem, 8vw, 5rem);
            line-height: 0.95;
            letter-spacing: 0;
        }

        p {
            max-width: 680px;
            margin: 20px 0 0;
            color: var(--muted);
            font-size: 1.1rem;
        }

        .meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 32px;
        }

        .meta span {
            padding: 8px 12px;
            border: 1px solid var(--line);
            border-radius: 999px;
            color: var(--muted);
            font-size: 0.9rem;
        }

        @media (max-width: 640px) {
            main {
                padding: 32px 24px;
            }
        }
    </style>
</head>
<body>
    <main>
        <p class="eyebrow">Sprint 1 Foundation</p>
        <h1>EventOS</h1>
        <p>
            Open-source platform for charity events, bingo, raffles, donations and community fundraising.
            The foundation is installed and ready for the first modules.
        </p>
        <div class="meta" aria-label="Project foundation">
            <span>PHP 8.3+</span>
            <span>PSR-4</span>
            <span>Modular Core</span>
            <span>CI Ready</span>
        </div>
    </main>
</body>
</html>
HTML;

    return new Response($content);
});
