<?php
/**
 * Copyright © 2019
 * Volkhin Nikolay <ulfnew@gmail.com> processing-logger
 * 31.12.2019 17:59
 */

namespace SbWereWolf\Logging;


use Generator;
use Psr\Log\AbstractLogger;

class ProcessingLogger extends AbstractLogger
    implements LoggingInterface
{
    /**
     * @var array
     */
    private $log;

    public function __construct(string $message)
    {
        $this->log[] = $message;
    }

    /**
     * @inheritDoc
     */
    public function log($level, $message, array $context = array())
    {
        $this->log[] = $message;
    }

    /**
     * Возвращает строковое сообщение
     * @return Generator
     */
    public function read()
    {
        foreach ($this->log as $message) {
            yield $message;
        }
    }
}
