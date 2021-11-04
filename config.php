<?php

use Dotenv\Dotenv;

/**
 * Load an .env file if exists.
 */
if(file_exists( __DIR__ . '/.env')) {
    $dotenv = Dotenv::createUnsafeImmutable(__DIR__);
    $dotenv->load();

    // Uncomment if you want to enforce some configuration to be set
    // $dotenv->required(['BASE_URL', 'DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD', 'DEBUG']);
}

define('BASE_URL', getenv('BASE_URL'));

/**
 * This will be deprecated soon!
 */
define('DB_HOST', getenv('DB_HOST'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_NAME', getenv('DB_NAME'));
