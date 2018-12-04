<?php

function checkChildUrl($path, $isRegex = false) {
    if ($path == "" || $path == "/") {
        return false;
    }

    $currentPath = parse_url(URL::current(), PHP_URL_PATH);
    return $isRegex
        ? preg_match($path, $currentPath)
        : strpos($currentPath, $path) === 0;
}
