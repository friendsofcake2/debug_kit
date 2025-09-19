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
    // ->withPhpSets()
    ->withPhpSets(php80: true)
//    ->withSets([
//        PHPUnitSetList::PHPUNIT_40,
//        PHPUnitSetList::PHPUNIT_50,
//        PHPUnitSetList::PHPUNIT_60,
//        PHPUnitSetList::PHPUNIT_70,
//        PHPUnitSetList::PHPUNIT_80,
//        PHPUnitSetList::PHPUNIT_90,
//        PHPUnitSetList::PHPUNIT_CODE_QUALITY,
//    ])
//    ->withTypeCoverageLevel(0)
//    ->withDeadCodeLevel(0)
//    ->withCodeQualityLevel(0)
    ;
