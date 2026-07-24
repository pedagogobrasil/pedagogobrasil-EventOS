<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

final class FoundationTest extends TestCase
{
    public function testProjectFoundationExists(): void
    {
        self::assertFileExists(__DIR__ . '/../../composer.json');
        self::assertFileExists(__DIR__ . '/../../public/index.php');
        self::assertFileExists(__DIR__ . '/../../bootstrap/app.php');
    }
}
