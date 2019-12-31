<?php
/**
 * Copyright © 2019
 * Volkhin Nikolay <ulfnew@gmail.com> processing-logger
 * 31.12.2019 17:59
 */

use SbWereWolf\Logging\ProcessingLogger;

/**
 * Copyright © 2019
 * Volkhin Nikolay <ulfnew@gmail.com> processing-logger
 * 31.12.2019 17:25
 */
class UnitTest extends PHPUnit\Framework\TestCase
{
    public function testSingle()
    {
        $message = 'first';
        $logger = new ProcessingLogger($message);

        $log = [];
        foreach ($logger->read() as $item) {
            $log[] = $item;
        }

        self::assertTrue(count($log) === 1,
            'Messages in log MUST BE one');
        self::assertTrue($log[0] === $message,
            "Message in log MUST BE `$message`");
    }

    public function testMultiply()
    {
        $message = 'first';
        $logger = new ProcessingLogger($message);
        $next = 'second';
        $logger->info($next);

        $log = [];
        foreach ($logger->read() as $item) {
            $log[] = $item;
        }

        self::assertTrue(count($log) === 2,
            'Messages in log MUST BE two');
        self::assertTrue($log[0] === $message,
            "First message in log MUST BE `$message`");
        self::assertTrue($log[1] === $next,
            "Second message in log MUST BE `$next`");
    }
}
