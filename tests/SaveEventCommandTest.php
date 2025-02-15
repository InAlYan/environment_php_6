<?php

use \PHPUnit\Framework\TestCase;

/**
 * @covers SaveEventCommand
 */
class SaveEventCommandTest extends TestCase
{
    /**
     * @dataProvider isNeedHelpDataProvider
     */
    public function testIsNeedHelp(array $options, bool $isNeedHelp)
    {
        $saveEventCommand = new \App\Commands\SaveEventCommand(new \App\Application(dirname(__DIR__)));

        $result = $saveEventCommand->isNeedHelp($options);

        self::assertEquals($result, $isNeedHelp);
    }

    public function IsNeedHelpDataProvider(): array
    {
        return [
            [
                [
                    "name" => "some_name",
                    "text" => "some_text",
                    "receiver" => "some_receiver",
                    "cron" => "some_cron",
                    // "help" => "",
                    // "h" => ""
                ],
                false
            ],
            [
                [
                    "name" => "some_name",
                    "text" => "some_text",
                    "receiver" => "some_receiver",
                    "cron" => "some_cron",
                    "help" => "some_help",
                    "h" => null
                ],
                true
            ]

        ];
    }

}