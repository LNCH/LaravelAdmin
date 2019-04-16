<?php

if (!function_exists("checkChildUrl")) {
    function checkChildUrl($path, $isRegex = false) {
        if ($path == "" || $path == "/") {
            return false;
        }

        $currentPath = parse_url(URL::current(), PHP_URL_PATH);
        return $isRegex
            ? preg_match($path, $currentPath)
            : strpos($currentPath, $path) === 0;
    }
}

if (!function_exists("la_isJson")) {
    function la_isJson($string) {
        if (!is_string($string)) return false;
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
