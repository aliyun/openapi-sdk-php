<?php

use Symfony\Component\Dotenv\Dotenv;

/*
|--------------------------------------------------------------------------
| Test Entry File for Alibaba Cloud
|--------------------------------------------------------------------------
|
| This file will be automatically loaded.
|
*/

error_reporting(E_ALL);
ini_set('display_errors', '1');
if (!ini_get('date.timezone')) {
    date_default_timezone_set('GMT');
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| We'll simply require it into the script here so that we don't have to
| worry about manual loading any of our classes later on.
|
*/

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$env = dirname(__DIR__) . DIRECTORY_SEPARATOR . '.env';
if (is_readable($env)) {
    (new Dotenv())->load($env);
}
