<?php
/**
 * Copyright © 2019
 * Volkhin Nikolay <ulfnew@gmail.com> processing-logger
 * 31.12.2019 17:59
 */

namespace SbWereWolf\Logging;


use Psr\Log\LoggerInterface;

interface LoggingInterface extends LoggerInterface
{
    public function read();
}
