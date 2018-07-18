<?php


use Slimcake\Core\Dispatcher;

define('__ROOT__', dirname(__DIR__));

require_once(__ROOT__ . '/vendor/autoload.php');
require_once(__ROOT__ . '/etc/bootstrap.php');

/** @noinspection PhpUnhandledExceptionInspection */
Dispatcher::invoke();
