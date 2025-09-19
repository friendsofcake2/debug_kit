<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/Console',
        __DIR__ . '/Controller',
        __DIR__ . '/Lib',
        __DIR__ . '/Model',
        __DIR__ . '/Test',
        __DIR__ . '/View',
    ])
    // uncomment to reach your current PHP version
//    ->withPhpSets(php80: true)
//    ->withSets([
//        Rector\PHPUnit\Set\PHPUnitSetList::PHPUNIT_100,
//    ])
//    ->withTypeCoverageLevel(0)
//    ->withDeadCodeLevel(0)
//    ->withCodeQualityLevel(0)
    ;
