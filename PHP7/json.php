<?php

/*
 * Functions:
 *     escape_json_unicodes
 */

declare(strict_types = 1);

if (!function_exists('escape_json_unicodes')) {
    /**
     * @param string $json JSON string with possibly escaped Unicode symbols
     *                     (\uXXXX).
     * @return string JSON string with escaped Unicode symbols (\\uXXXX).
     */
    function escape_json_unicodes(string $json): string
    {
        // preg_replace("/(\\u[0-9a-f]{4})/i", "\\$1", $json);
        return preg_replace('/(\\\\u[0-9a-f]{4})/i', '\\\\$1', $json);
    }
}
