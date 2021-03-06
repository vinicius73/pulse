<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Standard
    |--------------------------------------------------------------------------
    |
    | One or more coding standard do check for violations.
    | Available options are: Zend, PEAR, Squiz, PHPCS, MySource, PSR2 and PSR1
    |
    */
    'standard' => array(
        'PSR2',
    ),

    /*
    |--------------------------------------------------------------------------
    | Files to watch
    |--------------------------------------------------------------------------
    |
    | One or more files and/or directories to check
    |
    */
    'files' => array(
        'app/models',
        'app/controllers',
        'app/commands'
    ),

    /*
    |--------------------------------------------------------------------------
    | Files to ignore
    |--------------------------------------------------------------------------
    |
    | Sometimes you want LaraSniffer to run over a very large number of files,
    | but you want some files and folders to be skipped. The --ignore command
    | line argument can be used to tell LaraSniffer to skip files and folders
    | that match one or more patterns.
    |
    */
    'ignored' => array()
);
