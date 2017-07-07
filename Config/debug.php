<?php
/**
 * Created by PhpStorm.
 * User: PGF
 * Date: 2016/7/13
 * Time: 9:04
 */

return [
    'log_handler' => [
        new \Monolog\Handler\StreamHandler(BASE_PATH . 'Log/' . date('Y-m-d') . '.log', \Monolog\Logger::DEBUG, true, null, false),
        new \Monolog\Handler\BrowserConsoleHandler(\Monolog\Logger::DEBUG, true)
    ],
    'Whoops_handler' => [
        new \Whoops\Handler\PrettyPageHandler,
        new Whoops\Handler\CallbackHandler(function ($exception, $inspector, $run) {
            $plainTextHandler = new \Whoops\Handler\PlainTextHandler();
            $plainTextHandler->setException($exception);
            $plainTextHandler->setInspector($inspector);
            $plainTextHandler->setRun($run);
            \GFPHP\Logger::getInstance()->emergency($plainTextHandler->generateResponse());
            \GFPHP\Debug::stop();
        })
    ],
    'log_processor' => function ($record) {
        return $record;
    },
];