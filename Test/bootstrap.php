<?php
/**
 * Bootstrap for PHPUnit
 */

require_once __DIR__ . '/../vendor/pieceofcake2/cakephp/lib/Cake/Test/bootstrap.php';

App::uses('CakePlugin', 'Core');
CakePlugin::load('DebugKit', [
    'path' => dirname(__DIR__) . DS,
]);
