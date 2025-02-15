<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers HandleEventsDaemonCommand
 */
class HandleEventsDaemonCommandTest extends TestCase
{

    public function testGetCurrentTime()
    {
        $handleEventsDaemonCommand = new \App\Commands\HandleEventsDaemonCommand(new \App\Application(dirname(__DIR__)));
        self::assertEquals(
            [
                date('i'),
                date('H'),
                date('d'),
                date('m'),
                date('w')
            ],
            $handleEventsDaemonCommand->getCurrentTime());
    }

}