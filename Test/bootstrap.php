<?php
/**
 * Bootstrap for phpunit command
 */

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

require_once __DIR__ . '/../vendor/friendsofcake2/cakephp/lib/Cake/Test/bootstrap.php';

App::uses('CakePlugin', 'Core');
CakePlugin::load('DebugKit', [
    'path' => dirname(__DIR__) . DS,
]);
