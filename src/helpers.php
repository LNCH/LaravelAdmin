<?php

if (!function_exists("checkChildUrl")) {
    function checkChildUrl($item, $isRegex = false) {
        $path = $item['url'];
        if ($path == "" || $path == "/") {
            return false;
        }

        $isHome = isset($item['is_home']) && $item['is_home'] == true;
        $currentPath = parse_url(URL::current(), PHP_URL_PATH);

        if ($isHome) {
            return $path == $currentPath;
        } else {
            return $isRegex
                ? preg_match($path, $currentPath)
                : strpos($currentPath, $path) === 0;
        }
    }
}

if (!function_exists("la_isJson")) {
    function la_isJson($string) {
        if (!is_string($string)) return false;
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
