<?php


/*
 * Global helpers file with misc functions.
 */

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
/*
 * Add this line include 'app/helpers.php';
 * To /vendor/laravel/framework/src/Illuminate/Support/helpers.php
 */
if (! function_exists('snake_case')) {
    /**
     * Convert a string to snake case.
     *
     * @param  string  $value
     * @param  string  $delimiter
     * @return string
     */
    function snake_case($value, $delimiter = '_')
    {
        return Str::snake($value, $delimiter);
    }

    if (! function_exists('writeToLog')) {

        /**
         * Write custom messages to Log
         *
         * @param $logMessage
         * @param string $logType
         * @return \Illuminate\Config\Repository|mixed
         */
        function writeToLog($logMessage, $logType = 'error')
        {
            try {
                $allLogTypes = ['alert', 'critical', 'debug', 'emergency', 'error', 'info'];

                $logType = strtolower($logType);

                if (in_array($logType, $allLogTypes)) {
                    Log::$logType($logMessage);
                }
            } catch (Exception $exception) {
                //
            }
        }
    }
}
