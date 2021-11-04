<?php

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../config.php');

use Pachyderm\Dispatcher;
use Pachyderm\Middleware\MiddlewareManager;

/**
 * Dispatcher configuration.
 */
$dispatcher = new Dispatcher(BASE_URL,  new MiddlewareManager());

/**
 * Middleware global registration.
 */
$dispatcher->registerMiddlewares([
    Pachyderm\Middleware\JSONEncoderMiddleware::class,
    /**
     * Enable this to return 200 for OPTIONS requests (CORS).
     */
    // Pachyderm\Middleware\PreflightRequestMiddleware::class,

    /**
     * Enable this if you want to support HTTP session.
     */
    // Pachyderm\Middleware\SessionMiddleware::class,

    /**
     * Disable this if you don't want the execution time to 
     * be added to the payload.
     */
    Pachyderm\Middleware\TimerMiddleware::class,

    /**
     * Enable this if you connect to a MySQL database.
     */
    // Pachyderm\Middleware\DbSessionMiddleware::class
]);

require_once(__DIR__.'/../app/routes.php');

$dispatcher->dispatch();
