<?php

/**
 * AllTestsTest For DebugKit
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         DebugKit 1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use PHPUnit\Framework\TestSuite;

require_once __DIR__ . DS . 'DebugkitGroupTestCase.php';

/**
 * AllTestsTest class
 *
 * @since         DebugKit 1.0
 */
class AllTestsTest extends DebugkitGroupTestCase
{
    /**
     * Assemble Test Suite
     *
     * @return TestSuite the instance of \PHPUnit\Framework\TestSuite
     */
    public static function suite(): TestSuite
    {
        $suite = new self();
        $files = $suite->getTestFiles();
        $suite->addTestFiles($files);

        return $suite;
    }
}
