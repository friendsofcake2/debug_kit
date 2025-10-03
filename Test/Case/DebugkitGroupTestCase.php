<?php

/**
 * DebugKit Group Test Case
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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use PHPUnit\Framework\TestSuite;

/**
 * Class DebugKitGroupTestCase
 */
class DebugKitGroupTestCase extends TestSuite
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $label = Inflector::humanize(Inflector::underscore(static::class));
        parent::__construct($label);
    }

    /**
     * Get Test Files
     *
     * @param array|string|null $directory The test directories.
     * @param array|string|null $excludes The excludes.
     * @return array
     */
    public static function getTestFiles($directory = null, $excludes = null): array
    {
        if (is_array($directory)) {
            $files = [];
            foreach ($directory as $d) {
                $files = array_merge($files, self::getTestFiles($d, $excludes));
            }

            return array_unique($files);
        }

        if ($excludes !== null) {
            $excludes = self::getTestFiles((array)$excludes);
        }
        if ($directory === null || $directory !== realpath($directory)) {
            $basePath = CakePlugin::path('DebugKit') . 'Test' . DS . 'Case' . DS;
            $directory = str_replace(DS . DS, DS, $basePath . $directory);
        }

        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

        $files = [];
        while ($it->valid()) {
            if (!$it->isDot()) {
                $file = $it->key();

                if (
                    preg_match('|Test\.php$|', $file) &&
                    $file !== __FILE__ &&
                    !preg_match('|^All.+?\.php$|', basename($file)) &&
                    ($excludes === null || !in_array($file, $excludes))
                ) {
                    $files[] = $file;
                }
            }

            $it->next();
        }

        return $files;
    }
}
